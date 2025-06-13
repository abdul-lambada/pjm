<?php
$errorCode = http_response_code();
$pageTitle = 'Terjadi Kesalahan';
$content = '<section class="container text-center py-5">
  <h1 class="display-1 text-danger">' . $errorCode . '</h1>
  <p class="lead">Terjadi kesalahan saat memproses permintaan Anda</p>
  <a href="../index.php" class="btn btn-primary">Kembali ke Beranda</a>
</section>';

include '../templates/public_template.php';
?>
