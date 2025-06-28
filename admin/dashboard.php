<?php
require_once __DIR__ . '/includes/auth_check.php';
require_once __DIR__ . '/includes/functions.php';

$title = 'Dashboard';
ob_start();
?>

<!-- Page Header -->
<div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4">
    <div class="mb-3 mb-md-0">
        <h1 class="h3 mb-1 text-gray-800">Dashboard</h1>
        <p class="mb-0 text-muted">Ringkasan aktivitas dan statistik terbaru</p>
    </div>
    <div>
        <a href="#" class="btn btn-primary">
            <i class="fas fa-download me-1"></i> Generate Report
        </a>
    </div>
</div>

<!-- Stats Cards -->
<div class="row g-4 mb-4">
    <!-- Total Proyek -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats-card bg-primary">
            <div class="stats-label">Total Proyek</div>
            <div class="stats-value"><?= getTotalProjects() ?></div>
            <i class="fas fa-project-diagram"></i>
        </div>
    </div>
    
    <!-- Total Berita -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats-card bg-success">
            <div class="stats-label">Total Berita</div>
            <div class="stats-value"><?= getTotalNews() ?></div>
            <i class="fas fa-newspaper"></i>
        </div>
    </div>
    
    <!-- Total Galeri -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats-card bg-info">
            <div class="stats-label">Total Galeri</div>
            <div class="stats-value"><?= getTotalGallery() ?></div>
            <i class="fas fa-images"></i>
        </div>
    </div>
    
    <!-- Total Admin -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats-card bg-warning">
            <div class="stats-label">Total Admin</div>
            <div class="stats-value"><?= getTotalAdmins() ?></div>
            <i class="fas fa-users-cog"></i>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ringkasan Aktivitas</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                        <li><a class="dropdown-item" href="#">Minggu Ini</a></li>
                        <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                    </ul>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Sumber Pengunjung</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                        <li><a class="dropdown-item" href="#">Minggu Ini</a></li>
                        <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                    </ul>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="me-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="me-2">
                        <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="me-2">
                        <i class="fas fa-circle text-info"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/includes/layout.php';
?>