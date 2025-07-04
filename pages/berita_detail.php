<?php
// TODO: Ambil data berita dari database berdasarkan ID/slug
// Contoh data statis sementara
$judul = 'Judul Berita Contoh';
$tanggal = '2024-06-10';
$penulis = 'Admin';
$kategori = 'Proyek';
$gambar = '/pjm/assets/img/new/c.jpg';
$isi = 'Ini adalah isi lengkap berita. Nantinya akan diambil dari database sesuai ID/slug berita.';

?>
<?php include_once __DIR__ . '/../includes/head.php'; ?>
<?php include_once __DIR__ . '/../includes/header.php'; ?>
<main class="container py-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent px-0 mb-4">
      <li class="breadcrumb-item"><a href="/pjm/index.php">Beranda</a></li>
      <li class="breadcrumb-item"><a href="/pjm/index.php#berita">Berita</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($judul); ?></li>
    </ol>
  </nav>
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <article class="card shadow-sm border-0 mb-4">
        <?php if ($gambar): ?>
        <img src="<?php echo htmlspecialchars($gambar); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($judul); ?>">
        <?php endif; ?>
        <div class="card-body">
          <h1 class="card-title h3 fw-bold mb-2"><?php echo htmlspecialchars($judul); ?></h1>
          <div class="mb-3 text-muted small">
            <span class="me-2"><i class="bi bi-calendar"></i> <?php echo date('d M Y', strtotime($tanggal)); ?></span>
            <span class="me-2"><i class="bi bi-person"></i> <?php echo htmlspecialchars($penulis); ?></span>
            <span><i class="bi bi-tag"></i> <?php echo htmlspecialchars($kategori); ?></span>
          </div>
          <div class="card-text" style="min-height:120px;">
            <?php echo nl2br(htmlspecialchars($isi)); ?>
          </div>
        </div>
      </article>
      <a href="/pjm/index.php#berita" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a>
    </div>
  </div>
</main>
<?php include_once __DIR__ . '/../includes/footer.php'; ?> 