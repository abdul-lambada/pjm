<!-- Sidebar -->
<nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= getMenuUrl('/pjm/admin/dashboard.php') ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-home"></i>
            </div>
            <div class="sidebar-brand-text mx-3">PJM Admin</div>
        </a>
    </div>

    <?php
    // Include global helper & db functions
    require_once __DIR__ . '/functions.php';
    // Dapatkan path lengkap dan relatif
    $current_path = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
    $current_file = basename($current_path);
    $current_dir = basename(dirname($current_path));




    ?>

    <div class="sidebar-content">
        <ul class="nav flex-column">
            <!-- Dashboard -->
            <li class="nav-item <?= (strpos($current_path, 'dashboard.php') !== false) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= getMenuUrl('/pjm/admin/dashboard.php') ?>">
                    <i class="fas fa-fw fa-tachometer-alt me-2"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <li class="nav-divider">Konten</li>

            <!-- Berita -->
            <li class="nav-item <?= isActiveMenu('berita', $current_path) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= getMenuUrl('/pjm/admin/berita/berita.php') ?>">
                    <i class="fas fa-fw fa-newspaper me-2"></i>
                    <span>Berita</span>
                </a>
            </li>

            <!-- Proyek -->
            <li class="nav-item <?= isActiveMenu('proyek', $current_path) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= getMenuUrl('/pjm/admin/proyek/tambah_proyek.php') ?>">
                    <i class="fas fa-fw fa-project-diagram me-2"></i>
                    <span>Proyek</span>
                </a>
            </li>

            <!-- Galeri -->
            <li class="nav-item <?= isActiveMenu('galeri', $current_path) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= getMenuUrl('/pjm/admin/galeri/galeri.php') ?>">
                    <i class="fas fa-fw fa-images me-2"></i>
                    <span>Galeri</span>
                </a>
            </li>

            <!-- Lowongan Kerja -->
            <li class="nav-item <?= isActiveMenu('lowongan', $current_path) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= getMenuUrl('/pjm/admin/lowongan/lowongan.php') ?>">
                    <i class="fas fa-fw fa-briefcase me-2"></i>
                    <span>Lowongan Kerja</span>
                </a>
            </li>

            <!-- Divider -->
            <li class="nav-divider">Pengaturan</li>

            <!-- Profil -->
            <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'active' : '' ?>">
                <a class="nav-link" href="../profile.php">
                    <i class="fas fa-fw fa-user me-2"></i>
                    <span>Profil</span>
                </a>
            </li>

            <!-- Pengaturan -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapsePages" role="button" aria-expanded="false" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog me-2"></i>
                    <span>Pengaturan</span>
                    <i class="fas fa-chevron-down float-end mt-1"></i>
                </a>
                <div class="collapse" id="collapsePages">
                    <ul class="nav flex-column ms-4">
                        <li class="nav-item">
                            <span class="nav-link small text-muted">APLIKASI</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pengaturan/umum.php">
                                <i class="fas fa-fw fa-circle me-2"></i>
                                <span>Umum</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pengaturan/tampilan.php">
                                <i class="fas fa-fw fa-circle me-2"></i>
                                <span>Tampilan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link small text-muted">LAINNYA</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pengaturan/backup.php">
                                <i class="fas fa-fw fa-circle me-2"></i>
                                <span>Backup Database</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pengaturan/log.php">
                                <i class="fas fa-fw fa-circle me-2"></i>
                                <span>Log Aktivitas</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>

    <!-- Sidebar Footer -->
    <div class="sidebar-footer d-flex align-items-center justify-content-end p-3">
        <button class="btn btn-sm btn-outline-light rounded-circle" id="sidebarToggle" aria-label="Toggle Sidebar" title="Buka/Tutup Sidebar">
            <i class="fas fa-chevron-left toggle-icon"></i>
            <i class="fas fa-chevron-right toggle-icon d-none"></i>
        </button>
    </div>
</nav>
<!-- End of Sidebar -->