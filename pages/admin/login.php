<?php
// Memulai session
session_start();

// Jika sudah login, redirect ke dashboard
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Prohaba Jaya Mandiri</title>
  <link href="../../assets/img/title.png" rel="icon">
  <link href="../../assets/img/title.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="../../assets/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <a href="../../index.php" class="home-button">
    <i class="fas fa-arrow-left"></i> Kembali
  </a>

  <div class="login-container">
    <div class="login-box">
      <h2>Login Admin</h2>
      
      <?php if(isset($_GET['error'])): ?>
      <div class="alert alert-danger">
          <?php echo htmlspecialchars($_GET['error']); ?>
      </div>
      <?php endif; ?>

      <form id="loginForm" method="post" action="login_process.php">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Masukkan username Anda" required>
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
            <span class="toggle-password" onclick="togglePasswordVisibility()">
              <i class="fas fa-eye" id="toggleIcon"></i>
            </span>
          </div>
        </div>

        <div class="remember-forgot">
          <label>
              <input type="checkbox" id="rememberMe" name="remember"> Ingat Saya
          </label>
          <!-- <a href="#">Lupa Password?</a> -->
        </div>

        <button type="submit">Login</button>
      </form>
    </div>
  </div>

  <script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById('password');
    var toggleIcon = document.getElementById('toggleIcon');
    
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleIcon.classList.remove('fa-eye');
      toggleIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      toggleIcon.classList.remove('fa-eye-slash');
      toggleIcon.classList.add('fa-eye');
    }
  }

  document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var formData = new FormData(this);
    
    fetch('login_process.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.status === 'success') {
        window.location.href = data.redirect;
      } else {
        alert(data.message);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Terjadi kesalahan saat login. Silakan coba lagi.');
    });
  });
  </script>
</body>
</html>
