<?php

/**
 * Header Include
 * Berisi markup header dan navigasi utama.
 */
?>

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">
    <a href="/pjm/index.php" class="logo d-flex align-items-center me-auto">
      <img src="/pjm/assets/img/title.png" alt="Prohaba Jaya Mandiri">
      <h1 class="sitename">Prohaba Jaya Mandiri</h1>
    </a>
    <?php
    $current_page = $_SERVER['SCRIPT_NAME'];
    $tentang_kami_pages = ['/pjm/pages/introduction.php', '/pjm/pages/galeri.php'];
    $is_tentang_kami_active = in_array($current_page, $tentang_kami_pages);
    ?>
    <nav id="navmenu" class="navmenu">
      <button class="mobile-nav-toggle d-xl-none" aria-label="Toggle navigation" role="button" tabindex="0">
        <i class="bi bi-list" aria-hidden="true"></i>
        <span class="visually-hidden">Menu</span>
      </button>
      <ul class="mb-0 d-flex align-items-center">
        <li><a href="/pjm/index.php" class="<?= $current_page == '/pjm/index.php' ? 'active' : '' ?>">Beranda</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle <?= $is_tentang_kami_active ? 'active' : '' ?>" id="tentangKamiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="tentangKamiDropdown">
            <li><a class="dropdown-item <?= $current_page == '/pjm/pages/introduction.php' ? 'active' : '' ?>" href="/pjm/pages/introduction.php">Profil</a></li>
            <li><a class="dropdown-item <?= $current_page == '/pjm/pages/galeri.php' ? 'active' : '' ?>" href="/pjm/pages/galeri.php">Galeri</a></li>
            <li><a class="dropdown-item <?= $current_page == '/pjm/pages/video.php' ? 'active' : '' ?>" href="/pjm/pages/video.php">Video</a></li>
          </ul>
        </li>
        <li><a href="/pjm/pages/service.php" class="<?= $current_page == '/pjm/pages/service.php' ? 'active' : '' ?>">Layanan</a></li>
        <li><a href="/pjm/pages/k3-policy.php" class="<?= $current_page == '/pjm/pages/k3-policy.php' ? 'active' : '' ?>">K3 Policy</a></li>
        <li><a href="/pjm/pages/project.php" class="<?= $current_page == '/pjm/pages/project.php' ? 'active' : '' ?>">Proyek</a></li>
        <li><a href="/pjm/pages/career.php" class="<?= $current_page == '/pjm/pages/career.php' ? 'active' : '' ?>">Lowongan Kerja</a></li>
        <li><a href="/pjm/pages/contact.php" class="ms-3 <?= $current_page == '/pjm/pages/contact.php' ? 'active' : '' ?>">Kontak</a></li>
        <li><a href="/pjm/login.php" class="ms-3 <?= $current_page == '/pjm/login.php' ? 'active' : '' ?>">Login</a></li>
      </ul>
    </nav>
  </div>
</header>