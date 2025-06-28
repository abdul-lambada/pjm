<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}

// Include konfigurasi database
require_once __DIR__ . '/../../config.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: berita.php');
    exit();
}
$id = intval($_GET['id']);
// Hapus gambar jika ada
$stmt = $conn->prepare("SELECT gambar FROM berita WHERE id=?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result && $row = $result->fetch_assoc()) {
    if (!empty($row['gambar'])) {
        $gambar_path = __DIR__ . '/../../assets/img/berita/' . $row['gambar'];
        if (file_exists($gambar_path)) {
            unlink($gambar_path);
        }
    }
}
$stmt->close();
// Hapus berita
$db = $conn->prepare("DELETE FROM berita WHERE id=?");
$db->bind_param('i', $id);
$db->execute();
$db->close();
header('Location: berita.php');
exit();


