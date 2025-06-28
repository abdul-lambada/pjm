<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}

require_once __DIR__ . '/../../config.php';

// Periksa koneksi database
if (!isset($conn) || $conn->connect_error) {
    die("Koneksi database gagal: " . ($conn->connect_error ?? 'Tidak dapat membuat koneksi'));
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'ID berita tidak valid';
    header('Location: berita.php');
    exit();
}

$id = intval($_GET['id']);
$message = '';

// Ambil data berita
$stmt = $conn->prepare("SELECT * FROM berita WHERE id=?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if (!$result || $result->num_rows === 0) {
    $_SESSION['error'] = 'Berita tidak ditemukan';
    header('Location: berita.php');
    exit();
}

$row = $result->fetch_assoc();
$stmt->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul']);
    $isi = trim($_POST['isi']);
    $gambar = $row['gambar'];
    $errors = [];

    // Validasi input
    if (empty($judul)) {
        $errors[] = 'Judul berita harus diisi';
    }
    
    if (empty($isi)) {
        $errors[] = 'Isi berita harus diisi';
    }

    // Upload gambar jika ada
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['gambar'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $max_size = 2 * 1024 * 1024; // 2MB

        if (!in_array($ext, $allowed)) {
            $errors[] = 'Format file tidak didukung. Gunakan format JPG, JPEG, PNG, atau GIF';
        } elseif ($file['size'] > $max_size) {
            $errors[] = 'Ukuran file terlalu besar. Maksimal 2MB';
        } else {
            $filename = uniqid('berita_', true) . '.' . $ext;
            $target_dir = '../assets/img/berita/';
            $target_file = $target_dir . $filename;
            
            // Buat direktori jika belum ada
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            
            if (move_uploaded_file($file['tmp_name'], $target_file)) {
                // Hapus gambar lama jika ada dan bukan gambar default
                if (!empty($gambar) && file_exists($target_dir . $gambar) && $gambar !== 'default.jpg') {
                    unlink($target_dir . $gambar);
                }
                $gambar = $filename;
            } else {
                $errors[] = 'Gagal mengupload gambar';
            }
        }
    }

    // Jika tidak ada error, update data
    if (empty($errors)) {
        // Persiapkan query berdasarkan apakah ada gambar baru atau tidak
        if (!empty($gambar)) {
            $query = "UPDATE berita SET judul=?, isi=?, gambar=?, tanggal=NOW() WHERE id=?";
            $stmt = $conn->prepare($query);
            if ($stmt === false) {
                die('Error in prepare(): ' . htmlspecialchars($conn->error));
            }
            $stmt->bind_param('sssi', $judul, $isi, $gambar, $id);
        } else {
            $query = "UPDATE berita SET judul=?, isi=?, tanggal=NOW() WHERE id=?";
            $stmt = $conn->prepare($query);
            if ($stmt === false) {
                die('Error in prepare(): ' . htmlspecialchars($conn->error));
            }
            $stmt->bind_param('ssi', $judul, $isi, $id);
        }
        
        if ($stmt->execute()) {
            $_SESSION['success'] = 'Berita berhasil diperbarui';
            header('Location: berita.php');
            exit();
        } else {
            $errors[] = 'Terjadi kesalahan saat memperbarui berita: ' . $conn->error;
        }
        $stmt->close();
    }
    
    if (!empty($errors)) {
        $message = '<div class="alert alert-danger">' . implode('<br>', $errors) . '</div>';
    }
}

// Mulai output buffering
ob_start();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Berita</h1>
        <a href="berita.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali ke Daftar Berita
        </a>
    </div>

    <?= $message ?? ''; ?>

    <!-- Form Edit Berita -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="judul" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="judul" name="judul" 
                           value="<?= htmlspecialchars($row['judul']); ?>" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="isi" class="form-label">Isi Berita <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote" id="isi" name="isi" rows="10" required><?= 
                        htmlspecialchars($row['isi']); 
                    ?></textarea>
                </div>
                
                <div class="form-group mb-4">
                    <label for="gambar" class="form-label">Gambar Utama</label>
                    <?php if (!empty($row['gambar'])): 
                        $gambar_path = '/pjm/assets/img/berita/' . $row['gambar'];
                        $gambar_full_path = $_SERVER['DOCUMENT_ROOT'] . $gambar_path;
                        if (file_exists($gambar_full_path)): ?>
                            <div class="mb-2">
                                <img src="<?= $gambar_path ?>" 
                                     alt="Gambar Berita" 
                                     class="img-thumbnail" 
                                     style="max-width: 300px; height: auto;">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="hapus_gambar" name="hapus_gambar">
                                    <label class="form-check-label text-danger" for="hapus_gambar">
                                        Hapus gambar saat disimpan
                                    </label>
                                </div>
                            </div>
                        <?php 
                        endif; 
                    endif; ?>
                    <input type="file" class="form-control mt-2" id="gambar" name="gambar" accept="image/*">
                    <small class="form-text text-muted">Ukuran maksimal 2MB. Format: JPG, JPEG, PNG, GIF</small>
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan Perubahan
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
$title = 'Edit Berita';

// Include layout
require_once '../includes/layout.php';
?>

<?php
// Script khusus halaman edit berita
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
?>
