<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}
require_once '../includes/config.php';

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
    if ($row['gambar'] && file_exists('../assets/img/berita/'.$row['gambar'])) {
        unlink('../assets/img/berita/'.$row['gambar']);
    }
}
$stmt->close();
// Hapus berita
db = $conn->prepare("DELETE FROM berita WHERE id=?");
db->bind_param('i', $id);
db->execute();
db->close();
header('Location: berita.php');
exit();


