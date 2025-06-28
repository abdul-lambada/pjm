<?php
require_once '../config.php';
require_once '../includes/header.php';

// Periksa sesi admin
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login.php');
    exit;
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the gallery item to get the image name
$query = "SELECT gambar FROM galeri WHERE id = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $gambar);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

// Delete from database
$query = "DELETE FROM galeri WHERE id = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, 'i', $id);

if (mysqli_stmt_execute($stmt)) {
    // Delete the image file
    if ($gambar) {
        $targetFile = "../assets/img/galeri/" . $gambar;
        if (file_exists($targetFile)) {
            unlink($targetFile);
        }
    }
    $_SESSION['success_message'] = "Galeri berhasil dihapus.";
} else {
    $_SESSION['error_message'] = "Terjadi kesalahan: " . mysqli_error($koneksi);
}
mysqli_stmt_close($stmt);

header('Location: galeri.php');
exit;
?>
