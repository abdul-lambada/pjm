<?php
$page_title = 'Galeri - Prohaba Jaya Mandiri';
$breadcrumb = [
  ['name' => 'Beranda', 'url' => '/pjm/index.php'],
  ['name' => 'Galeri']
];

ob_start();
?>

<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
      <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-images me-2"></i>Galeri</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/pjm/index.php">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galeri</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<main>
  <!-- Portfolio Section -->
  <section id="portfolio" class="py-5" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);" data-aos="fade-up">
    <div class="container">
      
      <div class="section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-2"><i class="bi bi-images text-primary me-2"></i>Galeri Proyek</h2>
        <p class="text-muted">Dokumentasi visual dari berbagai proyek konstruksi yang telah kami selesaikan.</p>
      </div>

      <!-- Portfolio Filters -->
      <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
        <div class="d-flex justify-content-center flex-wrap gap-2" role="group" aria-label="Filter galeri">
          <button type="button" class="btn btn-outline-primary rounded-pill active" data-filter="all">Semua</button>
          <button type="button" class="btn btn-outline-primary rounded-pill" data-filter="construction">Konstruksi</button>
          <button type="button" class="btn btn-outline-primary rounded-pill" data-filter="infrastructure">Infrastruktur</button>
          <button type="button" class="btn btn-outline-primary rounded-pill" data-filter="workshop">Workshop</button>
        </div>
      </div>

      <!-- Portfolio Grid -->
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="workshop">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="100">
            <img src="/pjm/assets/img/new/c.jpg" class="img-fluid rounded-top" alt="Pembangunan Open Storage">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan Open Storage</h4>
              <p class="text-muted small mb-3">Site BIB</p>
              <a href="/pjm/assets/img/new/c.jpg" title="Pembangunan Open Storage" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="workshop">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="150">
            <img src="/pjm/assets/img/new/b.jpg" class="img-fluid rounded-top" alt="Pembangunan Workshop Support">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan Workshop Support</h4>
              <p class="text-muted small mb-3">Site BIB</p>
              <a href="/pjm/assets/img/new/b.jpg" title="Pembangunan Workshop Support" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="construction">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="200">
            <img src="/pjm/assets/img/new/a.jpg" class="img-fluid rounded-top" alt="Pembangunan Ruang Induksi">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan Ruang Induksi</h4>
              <p class="text-muted small mb-3">Site BIB</p>
              <a href="/pjm/assets/img/new/a.jpg" title="Pembangunan Ruang Induksi" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="infrastructure">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="250">
            <img src="/pjm/assets/img/new/d.jpg" class="img-fluid rounded-top" alt="Pembangunan Washpad HD 2 BAY">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan Washpad HD 2 BAY</h4>
              <p class="text-muted small mb-3">Site BIB</p>
              <a href="/pjm/assets/img/new/d.jpg" title="Pembangunan Washpad HD 2 BAY" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="workshop">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="300">
            <img src="/pjm/assets/img/new/e.jpg" class="img-fluid rounded-top" alt="Pembangunan Workshop HD 4 BAY">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan Workshop HD 4 BAY</h4>
              <p class="text-muted small mb-3">Site BIB</p>
              <a href="/pjm/assets/img/new/e.jpg" title="Pembangunan Workshop HD 4 BAY" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="construction">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="350">
            <img src="/pjm/assets/img/project/25 ERT site MIFA/c.jpeg" class="img-fluid rounded-top" alt="Pembangunan ERT">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan ERT</h4>
              <p class="text-muted small mb-3">Site MIFA</p>
              <a href="/pjm/assets/img/project/25 ERT site MIFA/c.jpeg" title="Pembangunan ERT" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="construction">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="400">
            <img src="/pjm/assets/img/project/26 Mess non Staff D1/c.jpeg" class="img-fluid rounded-top" alt="Pembangunan Mess Non-Staff">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan Mess Non-Staff</h4>
              <p class="text-muted small mb-3">Site MIFA</p>
              <a href="/pjm/assets/img/project/26 Mess non Staff D1/c.jpeg" title="Pembangunan Mess Non-Staff" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="infrastructure">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="450">
            <img src="/pjm/assets/img/project/27 View Point site MIFA/c.jpeg" class="img-fluid rounded-top" alt="Pembangunan View Point">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan View Point</h4>
              <p class="text-muted small mb-3">Site MIFA</p>
              <a href="/pjm/assets/img/project/27 View Point site MIFA/c.jpeg" title="Pembangunan View Point" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" data-category="infrastructure">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 portfolio-card" data-aos="zoom-in" data-aos-delay="500">
            <img src="/pjm/assets/img/project/28 Washpad site MIFA/c.jpeg" class="img-fluid rounded-top" alt="Pembangunan Washpad">
            <div class="portfolio-info p-4">
              <h4 class="fw-bold mb-2">Pembangunan Washpad</h4>
              <p class="text-muted small mb-3">Site MIFA</p>
              <a href="/pjm/assets/img/project/28 Washpad site MIFA/c.jpeg" title="Pembangunan Washpad" data-gallery="portfolio-gallery" class="glightbox preview-link btn btn-sm btn-outline-primary rounded-pill">
                <i class="bi bi-zoom-in me-1"></i>Preview
              </a>
            </div>
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