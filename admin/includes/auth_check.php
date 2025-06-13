<?php
// 1. Memulai Session jika belum ada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Redirect jika belum login
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Menggunakan path absolut untuk menghindari masalah direktori
    header('Location: /pjm/login.php');
    exit();
}

// 3. Menyertakan koneksi database (diperlukan oleh fungsi di bawah)
require_once __DIR__ . '/../../config/database.php';

// --- Helper Functions ---

function getTotalProjects() {
    global $conn;
    $tableCheck = $conn->query("SHOW TABLES LIKE 'projects'");
    if ($tableCheck->num_rows == 0) return 0;
    $result = $conn->query("SELECT COUNT(*) as total FROM projects");
    return $result ? $result->fetch_assoc()['total'] : 0;
}

function getTotalNews() {
    global $conn;
    $tableCheck = $conn->query("SHOW TABLES LIKE 'news'");
    if ($tableCheck->num_rows == 0) return 0;
    $result = $conn->query("SELECT COUNT(*) as total FROM news");
    return $result ? $result->fetch_assoc()['total'] : 0;
}

