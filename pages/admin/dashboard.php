<?php
// Memuat file auth_check.php untuk memeriksa autentikasi admin
require_once 'auth_check.php';

// Cek apakah user adalah admin
cek_admin();

// Koneksi ke database
require_once '../../database/koneksi.php';

// Mendapatkan statistik dari database
$total_proyek = 0;
$total_galeri = 0;

// Query untuk total proyek
$query_proyek = "SELECT COUNT(*) as total FROM proyek";
$result_proyek = mysqli_query($koneksi, $query_proyek);
if ($result_proyek) {
    $row = mysqli_fetch_assoc($result_proyek);
    $total_proyek = $row['total'];
}

// Query untuk total galeri
$query_galeri = "SELECT COUNT(*) as total FROM galeri";
$result_galeri = mysqli_query($koneksi, $query_galeri);
if ($result_galeri) {
    $row = mysqli_fetch_assoc($result_galeri);
    $total_galeri = $row['total'];
}

// Mendapatkan aktivitas terbaru (dummy data untuk saat ini)
$aktivitas = [
    ["icon" => "fas fa-check-circle text-success", "text" => "Proyek 'Jembatan Sungai Mahakam' diperbarui progresnya."],
    ["icon" => "fas fa-plus-circle text-primary", "text" => "Gambar baru ditambahkan ke galeri 'Proyek Balikpapan'."],
    ["icon" => "fas fa-user-plus text-info", "text" => "Pengguna baru 'John Doe' terdaftar."],
    ["icon" => "fas fa-pencil-alt text-warning", "text" => "Detail proyek 'Pembangunan Gedung Kantor' diedit."]
];
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Prohaba Jaya Mandiri</title>
    <link href="../../assets/img/title.png" rel="icon">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
    <div class="dashboard-wrapper">
      <aside class="sidebar">
        <div class="sidebar-header">
          <img src="../../assets/img/title.png" alt="Prohaba Jaya Mandiri" style="width: 50px; height: auto;">
          <h4>Prohaba Admin</h4>
        </div>
        <nav class="sidebar-nav">
          <ul>
            <li><a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="has-submenu">
              <a href="#" class="submenu-toggle"><i class="fas fa-folder-open"></i> Proyek <i class="fas fa-chevron-right arrow-icon"></i></a>
              <ul class="submenu">
                <li><a href="tambah_proyek.php"><i class="fas fa-plus-circle"></i> Tambah Proyek</a></li>
                <li><a href="daftar_proyek.php"><i class="fas fa-list-alt"></i> Daftar Proyek</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#" class="submenu-toggle"><i class="fas fa-image"></i> Galeri <i class="fas fa-chevron-right arrow-icon"></i></a>
              <ul class="submenu">
                <li><a href="tambah_galeri.php"><i class="fas fa-plus-square"></i> Tambah Galeri</a></li>
                <li><a href="daftar_galeri.php"><i class="fas fa-images"></i> Lihat Galeri</a></li>
              </ul>
            </li>
            <li><a href="lowongan_kerja.php"><i class="fas fa-user-plus"></i> Lowongan Kerja</a></li>
            <li><a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </ul>
        </nav>
      </aside>

      <main class="main-content">
        <header class="navbar">
          <button class="sidebar-toggle" aria-label="Toggle Sidebar"><i class="fas fa-bars"></i></button>
          <div class="navbar-title">
            <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['nama_lengkap']); ?>!</h2>
          </div>
          <div class="user-profile">
            <img src="https://via.placeholder.com/40" alt="Admin Avatar" class="avatar">
            <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
          </div>
        </header>

        <section class="content-area">
          <h3>Dashboard</h3>
          <div class="stats-cards">
            <div class="card">
              <i class="fas fa-hard-hat icon-large"></i>
              <h4>Total Proyek</h4>
              <p><?php echo $total_proyek; ?></p>
            </div>
            <div class="card">
              <i class="fas fa-camera icon-large"></i>
              <h4>Total Gambar Galeri</h4>
              <p><?php echo $total_galeri; ?></p>
            </div>
          </div>

          <div class="recent-activity">
            <h3>Aktivitas Terbaru</h3>
            <ul>
              <?php foreach ($aktivitas as $item): ?>
              <li><i class="<?php echo $item['icon']; ?>"></i> <?php echo $item['text']; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </section>
      </main>
    </div>

    <script src="../../assets/js/dashboard.js"></script>
  </body>
</html>
