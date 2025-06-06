<?php
// File untuk mengecek autentikasi user
session_start();

// Fungsi untuk memeriksa apakah user sudah login dan memiliki role admin
function cek_admin() {
    if(!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
        header("Location: login.php");
        exit;
    }
    
    if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        // Jika bukan admin, redirect ke halaman login
        session_destroy();
        header("Location: login.php?error=Anda tidak memiliki akses ke halaman ini");
        exit;
    }
    
    return true;
}
?>
