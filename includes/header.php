<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Prohaba Jaya Mandiri'; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Favicons -->
  <link href="/pjm/assets/img/title.png" rel="icon">
  <link href="/pjm/assets/img/title.png" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/pjm/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/pjm/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/pjm/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/pjm/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/pjm/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <!-- Main CSS File -->
  <link href="/pjm/assets/css/main.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body class="index-page">
  <?php
  /**
   * Header Include
   * Contains navigation and logo
   */
  ?>
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/pjm/index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/pjm/assets/img/title.png" alt="Prohaba Jaya Mandiri">
        <h1 class="sitename">Prohaba Jaya Mandiri</h1>
      </a>

      <?php
      $current_page = $_SERVER['SCRIPT_NAME'];
      $tentang_kami_pages = ['/pjm/pages/introduction.php', '/pjm/pages/galeri.php'];
      $is_tentang_kami_active = in_array($current_page, $tentang_kami_pages);
      ?>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/pjm/index.php" class="<?= $current_page == '/pjm/index.php' ? 'active' : '' ?>">Beranda</a></li>
          <li class="dropdown"><a href="#" class="<?= $is_tentang_kami_active ? 'active' : '' ?>"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/pjm/pages/introduction.php" class="<?= $current_page == '/pjm/pages/introduction.php' ? 'active' : '' ?>">Profil</a></li>
              <li><a href="/pjm/pages/galeri.php" class="<?= $current_page == '/pjm/pages/galeri.php' ? 'active' : '' ?>">Galeri</a></li>
            </ul>
          </li>
          <li><a href="/pjm/pages/service.php" class="<?= $current_page == '/pjm/pages/service.php' ? 'active' : '' ?>">Layanan</a></li>
          <li><a href="/pjm/pages/k3-policy.php" class="<?= $current_page == '/pjm/pages/k3-policy.php' ? 'active' : '' ?>">K3 Policy</a></li>
          <li><a href="/pjm/pages/project.php" class="<?= $current_page == '/pjm/pages/project.php' ? 'active' : '' ?>">Proyek</a></li>
          <li><a href="/pjm/pages/career.php" class="<?= $current_page == '/pjm/pages/career.php' ? 'active' : '' ?>">Lowongan Kerja</a></li>
          <li><a href="/pjm/pages/contact.php" class="<?= $current_page == '/pjm/pages/contact.php' ? 'active' : '' ?>">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="/pjm/login.php">Login</a>
    </div>
  </header>
