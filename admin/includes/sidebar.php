<!-- Sidebar Offcanvas (Mobile Only) -->
<div id="sidebarOffcanvas" class="offcanvas offcanvas-start d-md-none" tabindex="-1" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0 d-flex flex-column">
        <a href="/pjm/admin/dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <img src="<?= $_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png' ?>" alt="Avatar" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;" onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
            <span class="fs-5"><?= $_SESSION['admin_username'] ?? 'Admin' ?></span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/pjm/admin/dashboard.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/pjm/admin/berita.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'berita.php' ? 'active' : '' ?>">
                    <i class="bi bi-newspaper me-2"></i>
                    Berita
                </a>
            </li>
            <li>
                <a href="/pjm/admin/proyek.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'proyek.php' ? 'active' : '' ?>">
                    <i class="bi bi-kanban me-2"></i>
                    Proyek
                </a>
            </li>
            <li>
                <a href="/pjm/admin/galeri.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'galeri.php' ? 'active' : '' ?>">
                    <i class="bi bi-images me-2"></i>
                    Galeri
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <img src="<?= $_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png' ?>" alt="Avatar" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;" onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
                <strong><?= $_SESSION['admin_username'] ?? 'Admin' ?></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="/pjm/admin/profile.php">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/pjm/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Sidebar Static (Desktop Only) -->
<div id="sidebar" class="d-none d-md-flex flex-column flex-shrink-0 p-3 bg-white border-end" style="min-height:100vh; width:250px;">
    <a href="/pjm/admin/dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <img src="<?= $_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png' ?>" alt="Avatar" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;" onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
        <span class="fs-5"><?= $_SESSION['admin_username'] ?? 'Admin' ?></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/pjm/admin/dashboard.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
                <i class="bi bi-speedometer2 me-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="/pjm/admin/berita.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'berita.php' ? 'active' : '' ?>">
            <a href="berita.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'berita.php' ? 'active' : '' ?>">
                <i class="bi bi-newspaper me-2"></i>
                Berita
            </a>
        </li>
        <li>
            <a href="proyek.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'proyek.php' ? 'active' : '' ?>">
                <i class="bi bi-kanban me-2"></i>
                Proyek
            </a>
        </li>
        <li>
            <a href="galeri.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'galeri.php' ? 'active' : '' ?>">
                <i class="bi bi-images me-2"></i>
                Galeri
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
            <img src="<?= $_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png' ?>" alt="Avatar" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;" onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
            <strong><?= $_SESSION['admin_username'] ?? 'Admin' ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="/pjm/admin/profile.php">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/pjm/logout.php">Logout</a></li>
        </ul>
    </div>
</div>