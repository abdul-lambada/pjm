<?php
// Header Responsive Baru
?>
<header id="header" class="header sticky-top">
  <div class="container-xl d-flex align-items-center justify-content-between position-relative">
    
    <!-- Logo dan Nama Situs -->
    <a href="/pjm/index.php" class="logo d-flex align-items-center text-decoration-none">
      <img src="/pjm/assets/img/title.png" alt="Prohaba Jaya Mandiri" style="max-height:48px;">
      <span class="sitename ms-2">Prohaba Jaya Mandiri</span>
    </a>

    <!-- Tombol Hamburger -->
    <button class="mobile-nav-toggle d-lg-none ms-2" type="button" aria-label="Toggle navigation">
      <i class="bi bi-list" aria-hidden="true"></i>
    </button>

    <!-- Menu Navigasi -->
    <nav id="navmenu" class="navmenu">
      <ul class="nav-list">
        <li><a href="/pjm/index.php">Beranda</a></li>

        <!-- Dropdown Tentang Kami -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">
            Tentang Kami <i class="bi bi-chevron-down small ms-1"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/pjm/pages/introduction.php">Profil</a></li>
            <li><a href="/pjm/pages/galeri.php">Galeri</a></li>
            <li><a href="/pjm/pages/video.php">Video</a></li>
          </ul>
        </li>

        <!-- Menu Lain -->
        <li><a href="/pjm/pages/service.php">Layanan</a></li>
        <li><a href="/pjm/pages/k3-policy.php">K3 Policy</a></li>
        <li><a href="/pjm/pages/project.php">Proyek</a></li>
        <li><a href="/pjm/pages/career.php">Lowongan Kerja</a></li>
        <li><a href="/pjm/pages/contact.php">Kontak</a></li>
        <li><a href="/pjm/login.php">Login</a></li>
      </ul>
    </nav>
    
  </div>
</header>
