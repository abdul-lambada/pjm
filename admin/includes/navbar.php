<!-- Navbar -->
<nav class="navbar navbar-expand navbar-light bg-white border-bottom shadow-sm">
    <div class="container-fluid px-3">
        <!-- Sidebar Toggle (Hamburger) hanya untuk mobile -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3 p-2" aria-label="Toggle sidebar" title="Buka/Tutup Sidebar">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Brand (Visible on mobile) -->
        <a class="navbar-brand d-md-none text-primary fw-bold" href="<?= getMenuUrl('/pjm/admin/dashboard.php') ?>">
            PJM Admin
        </a>

        <!-- Topbar Search (Visible on desktop) -->
        <form class="d-none d-md-flex ms-3" id="navbarSearch">
            <div class="input-group input-group-merge">
                <span class="input-group-text bg-transparent border-end-0">
                    <i class="fas fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="Cari..." aria-label="Search" aria-describedby="search">
            </div>
        </form>

        <!-- Right Side Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Mobile Search Toggle -->
            <li class="nav-item d-md-none me-2">
                <a class="nav-link" id="searchMobileToggle" href="#" data-bs-toggle="collapse" data-bs-target="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
                    <i class="fas fa-search"></i>
                </a>
                <!-- Mobile Search Input -->
                <div class="collapse" id="mobileSearch">
                    <div class="input-group mt-2">
                        <input type="text" class="form-control" placeholder="Cari..." aria-label="Search">
                    </div>
                </div>
            </li>

            <div class="vr mx-2 d-none d-md-block"></div>

            <!-- User Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-none d-md-block me-2 text-end">
                        <div class="fw-medium text-dark"><?= htmlspecialchars($_SESSION['admin_username'] ?? 'Admin') ?></div>
                        <div class="small text-muted">Administrator</div>
                    </div>
                    <div class="position-relative">
                        <img src="<?= htmlspecialchars($_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png') ?>"
                            class="rounded-circle"
                            width="40"
                            height="40"
                            alt="User"
                            onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
                        <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-white rounded-circle">
                            <span class="visually-hidden">Online</span>
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated shadow" aria-labelledby="userDropdown">
                    <div class="dropdown-header bg-light">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <img src="<?= htmlspecialchars($_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png') ?>"
                                    class="rounded-circle"
                                    width="50"
                                    height="50"
                                    alt="User"
                                    onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0"><?= htmlspecialchars($_SESSION['admin_username'] ?? 'Admin') ?></h6>
                                <small class="text-muted">Administrator</small>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= getMenuUrl('/pjm/admin/profile.php') ?>">
                        <i class="fas fa-user fa-fw me-2"></i> Profil Saya
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cog fa-fw me-2"></i> Pengaturan
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-tasks fa-fw me-2"></i> Aktivitas
                    </a>
                    <div class="dropdown-divider"></div>
                    <button type="button" class="dropdown-item text-danger w-100 text-start" data-bs-toggle="modal" data-bs-target="#logoutModal" aria-label="Keluar" title="Keluar dari akun">
                        <i class="fas fa-sign-out-alt fa-fw me-2"></i> Keluar
                    </button>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- End of Navbar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="dialog" aria-modal="true">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Keluar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin keluar dari akun Anda?</p>
                <p class="small text-muted mb-0">Perubahan yang belum disimpan akan hilang.</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="<?= getMenuUrl('/pjm/admin/logout.php') ?>" class="btn btn-danger" id="confirmLogoutBtn">Ya, Keluar</a>
            </div>
        </div>
    </div>
</div>