<?php
$page_title = 'Proyek - Prohaba Jaya Mandiri';
$breadcrumb = [
  ['name' => 'Beranda', 'url' => '/pjm/index.php'],
  ['name' => 'Proyek']
];

ob_start();
?>

<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
      <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-kanban me-2"></i>Proyek</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/pjm/index.php">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Proyek</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<main>
  <!-- Projects Section -->
  <section id="projects" class="py-5" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);" data-aos="fade-up">
    <div class="container">
      <div class="section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-2"><i class="bi bi-kanban text-primary me-2"></i>Proyek Kami</h2>
        <p class="text-muted">Berikut adalah beberapa proyek unggulan yang telah kami selesaikan di berbagai sektor konstruksi dan infrastruktur.</p>
      </div>
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
        <!-- Project Cards Start -->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="card project-card shadow-lg border-0 rounded-4 h-100 overflow-hidden position-relative">
            <div class="project-img-wrapper">
              <img src="/pjm/assets/img/newpr/DOKUMENTASI PROYEK KM 13 BALIKPAPAN/BOX CULVERT/b.JPG" class="img-fluid w-100 project-img" alt="Box Culvert site KM 13">
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="fw-semibold mb-2">Box Culvert site KM 13</h5>
              <p class="text-secondary small mb-0">Pembangunan Box Culvert di PT. PPA site KM 13, Balikpapan - Kalimantan Timur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="card project-card shadow-lg border-0 rounded-4 h-100 overflow-hidden position-relative">
            <div class="project-img-wrapper">
              <img src="/pjm/assets/img/newpr/DOKUMENTASI PROYEK KM 13 BALIKPAPAN/MASJID/a.jpg" class="img-fluid w-100 project-img" alt="Masjid At-Taqwa site KM 13">
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="fw-semibold mb-2">Masjid At-Taqwa site KM 13</h5>
              <p class="text-secondary small mb-0">Pembangunan Masjid At-Taqwa di PT. PPA site KM 13, Balikpapan - Kalimantan Timur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="card project-card shadow-lg border-0 rounded-4 h-100 overflow-hidden position-relative">
            <div class="project-img-wrapper">
              <img src="/pjm/assets/img/newpr/Pekerjaan Embung WTP Project TH 2024.jpg" class="img-fluid w-100 project-img" alt="Embung WTP Project KM 13">
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="fw-semibold mb-2">Embung WTP Project KM 13</h5>
              <p class="text-secondary small mb-0">Pembangunan Embung WTP Project di PT. PPA site KM 13, Balikpapan - Kalimantan Timur.</p>
            </div>
          </div>
        </div>
        <!-- Project Cards End -->
      </div>
    </div>
  </section>
</main>

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>