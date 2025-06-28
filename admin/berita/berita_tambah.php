<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}

// Include konfigurasi database
require_once __DIR__ . '/../../config.php';

// Mulai output buffering
ob_start();

// Periksa koneksi database
if (!isset($conn) || $conn->connect_error) {
    die("Koneksi database gagal: " . ($conn->connect_error ?? 'Tidak dapat membuat koneksi'));
}

// Handle submit
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul']);
    $isi = trim($_POST['isi']);
    $tanggal = date('Y-m-d');
    $gambar = '';
    // Upload gambar jika ada
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['gambar'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $max_size = 2 * 1024 * 1024; // 2MB

        // Validasi tipe file
        if (!in_array($ext, $allowed)) {
            $message = '<div class="alert alert-danger">Format file tidak didukung. Gunakan format JPG, JPEG, PNG, atau GIF</div>';
        } 
        // Validasi ukuran file
        elseif ($file['size'] > $max_size) {
            $message = '<div class="alert alert-danger">Ukuran file terlalu besar. Maksimal 2MB</div>';
        } 
        else {
            $filename = 'berita_' . uniqid() . '.' . $ext;
            $upload_dir = __DIR__ . '/../../assets/img/berita/';
            
            // Buat direktori jika belum ada
            if (!is_dir($upload_dir)) {
                if (!mkdir($upload_dir, 0777, true)) {
                    $message = '<div class="alert alert-danger">Gagal membuat direktori upload</div>';
                }
            }
            
            $target_path = $upload_dir . $filename;
            
            // Coba pindahkan file
            if (move_uploaded_file($file['tmp_name'], $target_path)) {
                $gambar = $filename;
            } else {
                $error = error_get_last();
                $message = '<div class="alert alert-danger">Gagal mengupload gambar. ' . 
                          ($error ? $error['message'] : 'Pastikan folder tujuan dapat ditulisi') . '</div>';
            }
        }
    }
    if ($judul && $isi && !$message) {
        $stmt = $conn->prepare("INSERT INTO berita (judul, isi, tanggal, gambar) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $judul, $isi, $tanggal, $gambar);
        if ($stmt->execute()) {
            $_SESSION['success'] = 'Berita berhasil ditambahkan.';
            $stmt->close();
            header('Location: berita.php');
            exit();
        } else {
            $message = '<div class="alert alert-danger">Gagal menambah berita: ' . $conn->error . '</div>';
            $stmt->close();
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$message) {
        $message = '<div class="alert alert-danger">Judul dan isi wajib diisi.</div>';
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita Baru</h1>
        <a href="berita.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali ke Daftar Berita
        </a>
    </div>

    <?= $message ?? ''; ?>

    <!-- Form Tambah Berita -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Berita</h6>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="judul" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="isi" class="form-label">Isi Berita <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote" id="isi" name="isi" rows="10" required></textarea>
                </div>
                
                <div class="form-group mb-4">
                    <label for="gambar" class="form-label">Gambar Utama</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                    <small class="form-text text-muted">Ukuran maksimal 2MB. Format: JPG, JPEG, PNG, GIF</small>
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan Berita
                    </button>
                    <a href="berita.php" class="btn btn-secondary">
                        <i class="fas fa-times me-1"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
// Ambil konten dari buffer dan simpan ke variabel $content
$content = ob_get_clean();

// Set judul halaman
$title = 'Tambah Berita Baru';

// Include layout
require_once __DIR__ . '/../../admin/includes/layout.php';
?>

<?php
// Script khusus halaman tambah berita
function pageScripts() {
    ?>
    <script>
    $(document).ready(function() {
        // Inisialisasi Summernote
        if (typeof $.fn.summernote === 'function') {
            $('.summernote').summernote({
                height: 300,
                minHeight: 200,
                maxHeight: 500,
                focus: true,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        }
        
        // Validasi form sebelum submit
        $('form').on('submit', function(e) {
            const judul = $('#judul').val().trim();
            const isi = $('.summernote').summernote('code').replace(/<[^>]*>|\s+/g, '');
            
            if (!judul) {
                e.preventDefault();
                alert('Judul berita harus diisi');
                $('#judul').focus();
                return false;
            }
            
            if (!isi) {
                e.preventDefault();
                alert('Isi berita tidak boleh kosong');
                $('.summernote').summernote('focus');
                return false;
            }
            
            return true;
        });
    });
    </script>
    <?php
}
