<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}

require_once __DIR__ . '/../../config.php';
ob_start();
if (!isset($conn) || $conn->connect_error) {
    die("Koneksi database gagal: " . ($conn->connect_error ?? 'Tidak dapat membuat koneksi'));
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul']);
    $isi = trim($_POST['isi']);
    $tanggal = date('Y-m-d');
    $gambar = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['gambar'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $max_size = 2 * 1024 * 1024;
        if (!in_array($ext, $allowed)) {
            $message = '<div class="dashboard-card" style="background:#ffeaea; color:#d32f2f;">Format file tidak didukung. Gunakan format JPG, JPEG, PNG, atau GIF</div>';
        } elseif ($file['size'] > $max_size) {
            $message = '<div class="dashboard-card" style="background:#ffeaea; color:#d32f2f;">Ukuran file terlalu besar. Maksimal 2MB</div>';
        } else {
            $filename = 'berita_' . uniqid() . '.' . $ext;
            $upload_dir = __DIR__ . '/../../assets/img/berita/';
            if (!is_dir($upload_dir)) {
                if (!mkdir($upload_dir, 0777, true)) {
                    $message = '<div class="dashboard-card" style="background:#ffeaea; color:#d32f2f;">Gagal membuat direktori upload</div>';
                }
            }
            $target_path = $upload_dir . $filename;
            if (move_uploaded_file($file['tmp_name'], $target_path)) {
                $gambar = $filename;
            } else {
                $error = error_get_last();
                $message = '<div class="dashboard-card" style="background:#ffeaea; color:#d32f2f;">Gagal mengupload gambar. ' . ($error ? $error['message'] : 'Pastikan folder tujuan dapat ditulisi') . '</div>';
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
            $message = '<div class="dashboard-card" style="background:#ffeaea; color:#d32f2f;">Gagal menambah berita: ' . $conn->error . '</div>';
            $stmt->close();
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$message) {
        $message = '<div class="dashboard-card" style="background:#ffeaea; color:#d32f2f;">Judul dan isi wajib diisi.</div>';
    }
}
?>
<div class="admin-content" style="max-width:600px; margin:auto;">
    <div style="display:flex; justify-content:space-between; align-items:end; margin-bottom:1.2rem; gap:1rem; flex-wrap:wrap;">
        <div style="display:flex; flex-direction:column; gap:0.2rem;">
            <span style="font-size:1.18rem; font-weight:600; color:#222;">Tambah Berita Baru</span>
            <span style="font-size:0.98rem; color:#4e8cff; font-weight:400;">Isi form untuk menambah berita</span>
        </div>
        <a href="berita.php" class="btn-berita edit" style="font-size:0.98rem; font-weight:500; padding:0.5rem 1.2rem;">&larr; Kembali</a>
    </div>
    <?= $message ?? ''; ?>
    <form method="post" enctype="multipart/form-data" class="form-berita">
        <div>
            <label for="judul">Judul Berita <span style="color:#d32f2f;">*</span></label>
            <input type="text" id="judul" name="judul" required>
        </div>
        <div>
            <label for="isi">Isi Berita <span style="color:#d32f2f;">*</span></label>
            <textarea id="isi" name="isi" rows="8" required style="min-height:120px;"></textarea>
        </div>
        <div>
            <label for="gambar">Gambar Utama</label>
            <input type="file" id="gambar" name="gambar" accept="image/*">
            <small style="color:#888;">Ukuran maksimal 2MB. Format: JPG, JPEG, PNG, GIF</small>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-berita detail"><b>+ Simpan Berita</b></button>
            <a href="berita.php" class="btn-berita edit">Batal</a>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
$title = 'Tambah Berita Baru';
require_once __DIR__ . '/../../admin/includes/layout.php';
