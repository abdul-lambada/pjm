<?php
$uri = $_SERVER['REQUEST_URI'];
function menu_active($paths) {
  global $uri;
  foreach ((array)$paths as $path) {
    if (strpos($uri, $path) !== false) return 'active';
  }
  return '';
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-2">
  <div class="container-xl">
    <a class="navbar-brand d-flex align-items-center" href="/pjm/index.php">
      <img src="/pjm/assets/img/title.png" alt="Prohaba Jaya Mandiri">
      <span class="sitename ms-2">Prohaba Jaya Mandiri</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2 gap-lg-4">
        <li class="nav-item">
          <a class="nav-link <?php echo menu_active(['/pjm/index.php']); ?>" href="/pjm/index.php">Beranda</a>
        </li>
        <li class="nav-item dropdown <?php echo menu_active(['/pjm/pages/introduction.php','/pjm/pages/galeri.php','/pjm/pages/video.php']); ?>">
          <a class="nav-link dropdown-toggle <?php echo menu_active(['/pjm/pages/introduction.php','/pjm/pages/galeri.php','/pjm/pages/video.php']); ?>" href="#" id="tentangKamiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="tentangKamiDropdown">
            <li><a class="dropdown-item <?php echo menu_active(['/pjm/pages/introduction.php']); ?>" href="/pjm/pages/introduction.php">Profil</a></li>
            <li><a class="dropdown-item <?php echo menu_active(['/pjm/pages/galeri.php']); ?>" href="/pjm/pages/galeri.php">Galeri</a></li>
            <li><a class="dropdown-item <?php echo menu_active(['/pjm/pages/video.php']); ?>" href="/pjm/pages/video.php">Video</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link <?php echo menu_active(['/pjm/pages/service.php']); ?>" href="/pjm/pages/service.php">Layanan</a></li>
        <li class="nav-item"><a class="nav-link <?php echo menu_active(['/pjm/pages/k3-policy.php']); ?>" href="/pjm/pages/k3-policy.php">K3 Policy</a></li>
        <li class="nav-item"><a class="nav-link <?php echo menu_active(['/pjm/pages/project.php']); ?>" href="/pjm/pages/project.php">Proyek</a></li>
        <li class="nav-item"><a class="nav-link <?php echo menu_active(['/pjm/pages/career.php']); ?>" href="/pjm/pages/career.php">Lowongan Kerja</a></li>
        <li class="nav-item"><a class="nav-link <?php echo menu_active(['/pjm/pages/contact.php']); ?>" href="/pjm/pages/contact.php">Kontak</a></li>
        <li class="nav-item"><a class="nav-link <?php echo menu_active(['/pjm/login.php']); ?>" href="/pjm/login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
