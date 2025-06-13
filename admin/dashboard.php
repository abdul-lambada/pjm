<?php

require_once __DIR__ . '/includes/auth_check.php';

$title = 'Dashboard Admin | Prohaba Jaya Mandiri';
ob_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link href="../assets/img/title.png" rel="icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h3">Dashboard</h1>
  </div>
  <div class="row g-4 mb-4">
    <!-- Total Proyek -->
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card shadow-sm">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <div class="text-muted small">Total Proyek</div>
            <div class="fs-3 fw-bold"><?= getTotalProjects() ?></div>
          </div>
          <div class="text-primary">
            <i class="bi bi-kanban fs-1"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- Total Berita -->
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card shadow-sm">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <div class="text-muted small">Total Berita</div>
            <div class="fs-3 fw-bold"><?= getTotalNews() ?></div>
          </div>
          <div class="text-success">
            <i class="bi bi-newspaper fs-1"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>
  </div>
  </div>
  <?php
  $content = ob_get_clean();
  include __DIR__ . '/includes/layout.php';
  ?>