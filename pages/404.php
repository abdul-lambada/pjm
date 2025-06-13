<?php
http_response_code(404);
$pageTitle = 'Halaman Tidak Ditemukan';
$content = '<section class="container text-center py-5">
  <h1 class="display-1 text-danger">404</h1>
  <p class="lead">Halaman yang Anda cari tidak ditemukan</p>
  <a href="../index.php" class="btn btn-primary">Kembali ke Beranda</a>
</section>';

include '../templates/public_template.php';
?>
