<!-- Top Navigation -->
<nav class="navbar navbar-expand navbar-light bg-white border-bottom">
    <div class="container-fluid">
        <button class="btn btn-link d-md-none" id="sidebarToggle" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
            <i class="bi bi-list"></i>
        </button>

        <div class="d-flex align-items-center ms-auto">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="<?= $_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png' ?>" alt="Avatar" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;" onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
                    <strong><?= $_SESSION['admin_username'] ?? 'Admin' ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="/pjm/admin/profile.php">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>