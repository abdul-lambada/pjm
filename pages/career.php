<?php
$page_title = 'Lowongan Kerja';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/index.php'],
    ['name' => 'Lowongan Kerja']
];

ob_start();
?>

<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
      <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-briefcase-fill me-2"></i>Lowongan Kerja</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/pjm/index.php">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lowongan Kerja</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<main class="main">

    <section id="career" class="career section" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%); padding: 3.5rem 0 3rem 0;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card shadow-lg border-0 p-4 p-md-5 rounded-4" data-aos="fade-up">
              <h2 class="mb-3 fw-bold" style="color: var(--color-primary-dark, #1b3c2e);" data-aos="fade-up">Lowongan Kerja</h2>
              <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">
                Saat ini belum ada lowongan yang tersedia.<br>Silakan periksa kembali halaman ini secara berkala untuk informasi terbaru.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

</main>

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>
