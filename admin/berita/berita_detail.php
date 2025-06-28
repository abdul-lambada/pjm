<?php
// Mulai session
session_start();

// Pastikan hanya admin yang bisa mengakses
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}

// Set judul halaman
$title = 'Detail Berita';

// Include konfigurasi database
require_once __DIR__ . '/../../config.php';

// Periksa koneksi database
if (!isset($conn) || $conn->connect_error) {
    die("Koneksi database gagal: " . ($conn->connect_error ?? 'Tidak dapat membuat koneksi'));
}

// Ambil ID berita dari parameter URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    header('Location: berita.php');
    exit();
}

// Query untuk mengambil detail berita
$stmt = $conn->prepare("SELECT * FROM berita WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // Jika berita tidak ditemukan, redirect ke halaman daftar berita
    $_SESSION['error_message'] = 'Berita tidak ditemukan';
    header('Location: berita.php');
    exit();
}

$berita = $result->fetch_assoc();
$stmt->close();

// Set judul halaman dinamis
$title = htmlspecialchars($berita['judul']) . ' - Detail Berita';

// Mulai output buffering
ob_start();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Berita</h1>
        <div>
            <a href="berita_edit.php?id=<?= $berita['id'] ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                </span>
                <span class="text">Edit Berita</span>
            </a>
            <a href="berita.php" class="btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Detail Berita -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary"><?= htmlspecialchars($berita['judul']) ?></h6>
                    <div class="text-muted small">
                        <i class="far fa-calendar-alt me-1"></i>
                        <?= date('d M Y', strtotime($berita['tanggal'])) ?>
                        <?php if (!empty($berita['tanggal_ubah'])): ?>
                            <span class="ms-2">
                                <i class="fas fa-edit me-1"></i>
                                Diperbarui: <?= date('d M Y H:i', strtotime($berita['tanggal_ubah'])) ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (!empty($berita['gambar'])): 
                        $gambar_path = '/pjm/assets/img/berita/' . $berita['gambar'];
                        $gambar_full_path = $_SERVER['DOCUMENT_ROOT'] . $gambar_path;
                        if (file_exists($gambar_full_path)): 
                    ?>
                        <div class="text-center mb-4">
                            <img src="<?= $gambar_path ?>" 
                                 alt="<?= htmlspecialchars($berita['judul']) ?>" 
                                 class="img-fluid rounded"
                                 style="max-height: 500px; width: auto; object-fit: contain;">
                        </div>
                    <?php endif; endif; ?>
                    
                    <div class="content">
                        <?= $berita['isi'] ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="berita.php" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar Berita
                    </a>
                    <div class="text-muted small">
                        <i class="fas fa-user-edit me-1"></i>
                        <?= htmlspecialchars($berita['penulis'] ?? 'Admin') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
// Ambil konten dari buffer
$content = ob_get_clean();

// Include layout
include __DIR__ . '/../includes/layout.php';
?>

<?php
// Ambil konten dari buffer
$content = ob_get_clean();
echo $content;
?>
