<?php
$page_title = 'Galeri';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/index.php'],
    ['name' => 'Galeri']
];

ob_start();
?>

<main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section py-5">

      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-gradient">Galeri Proyek</h2>
        <p>Jelajahi dokumentasi visual proyek-proyek unggulan kami di berbagai sektor.</p>
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters d-flex justify-content-center flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active btn btn-sm btn-outline-primary rounded-pill active">Semua</li>
            <li data-filter=".filter-construction" class="btn btn-sm btn-outline-primary rounded-pill">Konstruksi</li>
            <li data-filter=".filter-infrastructure" class="btn btn-sm btn-outline-primary rounded-pill">Infrastruktur</li>
            <li data-filter=".filter-workshop" class="btn btn-sm btn-outline-primary rounded-pill">Workshop</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-5 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-workshop">
              <img src="/pjm/assets/img/new/c.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan Open Storage</h4>
                <p>Site BIB</p>
                <a href="/pjm/assets/img/new/c.jpg" title="Pembangunan Open Storage" data-gallery="portfolio-gallery-workshop" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-workshop">
              <img src="/pjm/assets/img/new/b.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan Workshop Support</h4>
                <p>Site BIB</p>
                <a href="/pjm/assets/img/new/b.jpg" title="Pembangunan Workshop Support" data-gallery="portfolio-gallery-workshop" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <img src="/pjm/assets/img/new/a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan Ruang Induksi</h4>
                <p>Site BIB</p>
                <a href="/pjm/assets/img/new/a.jpg" title="Pembangunan Ruang Induksi" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-infrastructure">
              <img src="/pjm/assets/img/new/d.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan Washpad HD 2 BAY</h4>
                <p>Site BIB</p>
                <a href="/pjm/assets/img/new/d.jpg" title="Pembangunan Washpad HD 2 BAY" data-gallery="portfolio-gallery-infrastructure" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-workshop">
              <img src="/pjm/assets/img/new/e.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan Workshop HD 4 BAY</h4>
                <p>Site BIB</p>
                <a href="/pjm/assets/img/new/e.jpg" title="Pembangunan Workshop HD 4 BAY" data-gallery="portfolio-gallery-workshop" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <img src="/pjm/assets/img/project/25 ERT site MIFA/c.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan ERT</h4>
                <p>Site MIFA</p>
                <a href="/pjm/assets/img/project/25 ERT site MIFA/c.jpeg" title="Pembangunan ERT" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <img src="/pjm/assets/img/project/26 Mess non Staff D1/c.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan Mess Non-Staff</h4>
                <p>Site MIFA</p>
                <a href="/pjm/assets/img/project/26 Mess non Staff D1/c.jpeg" title="Pembangunan Mess Non-Staff" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-infrastructure">
              <img src="/pjm/assets/img/project/27 View Point site MIFA/c.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan View Point</h4>
                <p>Site MIFA</p>
                <a href="/pjm/assets/img/project/27 View Point site MIFA/c.jpeg" title="Pembangunan View Point" data-gallery="portfolio-gallery-infrastructure" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-infrastructure">
              <img src="/pjm/assets/img/project/28 Washpad site MIFA/c.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pembangunan Washpad</h4>
                <p>Site MIFA</p>
                <a href="/pjm/assets/img/project/28 Washpad site MIFA/c.jpeg" title="Pembangunan Washpad" data-gallery="portfolio-gallery-infrastructure" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

</main>

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>
