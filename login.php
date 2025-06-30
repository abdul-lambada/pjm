<?php
session_start();

try {
  // Koneksi database
  require_once __DIR__ . '/config/database.php';

  // Cek apakah tabel users ada
  $tableCheck = $conn->query("SHOW TABLES LIKE 'users'");
  if ($tableCheck->num_rows == 0) {
    throw new Exception('Tabel users belum dibuat. Silakan jalankan setup database terlebih dahulu.');
  }

  if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: admin/dashboard.php');
    exit();
  }

  $error = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password, nama_lengkap FROM users WHERE username = ?");
    if (!$stmt) {
      throw new Exception('Prepare statement failed: ' . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      if (password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        $_SESSION['admin_nama'] = $user['nama_lengkap'];
        header('Location: admin/dashboard.php');
        exit;
      } else {
        $error = 'Password salah!';
      }
    } else {
      $error = 'Username tidak ditemukan!';
    }
    $stmt->close();
  }
} catch (Exception $e) {
  $error = 'System Error: ' . $e->getMessage();
}

$pageTitle = 'Login Admin - Prohaba Jaya Mandiri';
$main_content = '<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
      <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-person-lock me-2"></i>Login Admin</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/pjm/index.php">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Login Admin</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<main class="main"><div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card shadow">
        <div class="card-body p-4">
          <div class="text-center mb-4">
            <img src="/pjm/assets/img/title.png" class="img-fluid mx-auto d-block" style="width:80px;" alt="Logo">
            <h3 class="mt-3">Login Admin</h3>
          </div>

          ' . ($error ? '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>' : '') . '

          <form method="post" autocomplete="off">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="password-wrapper position-relative">
                <input type="password" class="form-control pe-5" id="password" name="password" placeholder="Masukkan password" required>
                <button type="button" class="toggle-password btn btn-link position-absolute top-50 end-0 translate-middle-y px-2" tabindex="-1" aria-label="Tampilkan Password" onclick="togglePasswordVisibility()">
                  <i class="bi bi-eye" id="toggleIcon"></i>
                </button>
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-semibold mx-auto d-block" style="max-width:240px;">Login</button>
          </form>
        </div>
      </div>
      <div class="text-center mt-3">
        <a href="/pjm/index.php" class="btn btn-outline-primary d-inline-flex align-items-center gap-2">
          <i class="bi bi-arrow-left"></i>
          <span>Kembali</span>
        </a>
      </div>
    </div>
  </div>
</div></main>';

include 'templates/public_template.php';
