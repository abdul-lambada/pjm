<?php
session_start();
require_once '../../database/koneksi.php';

// Fungsi untuk membersihkan input
function clean_input($data) {
    global $koneksi;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($koneksi, $data);
    return $data;
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = clean_input($_POST['username']);
    $password = $_POST['password']; // Password tidak di-clean karena akan di-hash
    
    // Validasi input
    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Username dan password harus diisi']);
        exit;
    }
    
    // Query untuk mencari user dengan username yang sesuai
    $query = "SELECT * FROM users WHERE username = '$username' AND role = 'admin' AND status = 'aktif'";
    $result = mysqli_query($koneksi, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Password benar, set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['is_logged_in'] = true;
            
            // Kirim respons sukses
            echo json_encode(['status' => 'success', 'message' => 'Login berhasil', 'redirect' => 'dashboard.html']);
        } else {
            // Password salah
            echo json_encode(['status' => 'error', 'message' => 'Username atau password salah']);
        }
    } else {
        // User tidak ditemukan atau bukan admin
        echo json_encode(['status' => 'error', 'message' => 'Username atau password salah']);
    }
    
    mysqli_close($koneksi);
} else {
    // Bukan method POST
    echo json_encode(['status' => 'error', 'message' => 'Method tidak valid']);
}
?>
