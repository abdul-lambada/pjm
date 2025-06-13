<?php
$page_title = 'Lowongan Kerja';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/index.php'],
    ['name' => 'Lowongan Kerja']
];

ob_start();
?>

<main class="main">

    <section id="career" class="career section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 data-aos="fade-up">Lowongan Kerja</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">
              Saat ini belum ada lowongan yang tersedia. Silakan periksa kembali halaman ini secara berkala untuk informasi terbaru.
            </p>
          </div>
        </div>
      </div>
    </section>

</main>

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>
