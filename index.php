<?php
// ====================================================================
//  PROHABA JAYA MANDIRI – Landing Page (Beranda)
//  Built: 2025-06-17 by PROHABA JAYA MANDIRI
//  ===================================================================
$page_title  = 'Beranda';
$breadcrumb  = [];
ob_start();
?>
<main>
  <!-- ======================== Hero Section ======================== -->
  <section id="hero" class="bg-light p-0" data-aos="fade-up">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/pjm/assets/img/sampul.jpg" class="d-block w-100 hero-img" alt="Prohaba Jaya Mandiri">
          <div class="carousel-caption text-start px-4 px-md-5">
            <h2 class="display-4 fw-bold mb-2">PROHABA<br>JAYA MANDIRI</h2>
            <p class="lead">Better, Faster and Effective Cost.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/pjm/assets/img/sampul.jpg" class="d-block w-100 hero-img" alt="Profesional Team">
          <div class="carousel-caption text-start px-4 px-md-5">
            <h2 class="display-4 fw-bold mb-2">Profesional &amp; Terpercaya</h2>
            <p class="lead">Kualitas terbaik & kepuasan pelanggan.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/pjm/assets/img/sampul.jpg" class="d-block w-100 hero-img" alt="Innovation">
          <div class="carousel-caption text-start px-4 px-md-5">
            <h2 class="display-4 fw-bold mb-2">Inovasi Tanpa Batas</h2>
            <p class="lead">Solusi konstruksi masa depan.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <style>
      .hero-img {
        max-height: 420px;
        object-fit: cover;
        object-position: center;
      }
      @media (max-width: 767.98px) {
        .hero-img {
          max-height: 240px;
        }
      }
    </style>
  </section>

  <!-- ======================== About Section ======================= -->
  <section id="about" class="py-5" data-aos="fade-right">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6">
          <img src="/pjm/assets/img/prohaba-teamwork.jpg" class="img-fluid rounded-3 shadow" alt="Prohaba Teamwork">
        </div>
        <div class="col-lg-6">
          <h3 class="mb-3">Tim &amp; Manajemen Kerja</h3>
          <p>Perusahaan kami tidak dalam pengawasan Pengadilan, tidak bangkrut, dan tidak sedang dihentikan kegiatan usahanya serta siap bekerja sama dengan pemerintah maupun swasta.</p>
          <p>Bekerja sama mengemban amanah, rasa memiliki, dan memberi. Dengan skill profesional, jujur, dan bertanggung jawab — maju dan sukses bersama.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================= Why Us ============================ -->
  <section id="why-us" class="bg-light py-5" data-aos="zoom-in">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm border-0 rounded-4 h-100 p-4 text-center">
            <div class="mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-lightbulb fs-2 text-primary"></i>
            </div>
            <h5 class="fw-semibold mb-2">VISI</h5>
            <p class="text-secondary small mb-0">Menjadi perusahaan terbaik di Indonesia dengan kejujuran, keikhlasan &amp; amanah.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm border-0 rounded-4 h-100 p-4 text-center">
            <div class="mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-bullseye fs-2 text-primary"></i>
            </div>
            <h5 class="fw-semibold mb-2">MISI</h5>
            <p class="text-secondary small mb-0">Mengutamakan kepuasan pelanggan melalui produk bermutu tinggi sesuai permintaan.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm border-0 rounded-4 h-100 p-4 text-center">
            <div class="mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-gem fs-2 text-primary"></i>
            </div>
            <h5 class="fw-semibold mb-2">VALUE</h5>
            <p class="text-secondary small mb-0">Action, Accountable, Innovative, Optimal &amp; Neat.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================= Berita ============================ -->
  <section id="berita" class="py-5" data-aos="fade-left">
    <div class="container">
      <h3 class="text-center mb-5"><strong>Berita Terbaru</strong></h3>
      <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="/pjm/assets/img/new/c.jpg" class="card-img-top" alt="Open Storage site BIB">
            <div class="card-body">
              <h4 class="fw-semibold">Open Storage site BIB</h4>
              <p>Proyek Pembangunan Open Storage site BIB.</p>
              <a href="/pjm/pages/berita_detail.php" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="/pjm/assets/img/new/b.jpg" class="card-img-top" alt="Workshop Support site BIB">
            <div class="card-body">
              <h4 class="fw-semibold">Workshop Support site BIB</h4>
              <p>Proyek Pembangunan Workshop Support site BIB.</p>
              <a href="/pjm/pages/berita_detail.php" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="/pjm/assets/img/new/a.jpg" class="card-img-top" alt="Ruang Induksi site BIB">
            <div class="card-body">
              <h4 class="fw-semibold">Ruang Induksi site BIB</h4>
              <p>Proyek Pembangunan Ruang Induksi site BIB.</p>
              <a href="/pjm/pages/berita_detail.php" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================= Clients =========================== -->
  <section id="clients" class="bg-light py-5" data-aos="fade-up">
    <div class="container">
      <h4 class="text-center mb-4"><strong>Klien Kami</strong></h4>
      <div id="clientsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
          <?php
          $clients = [
            'abp-energy', 'adimitra-baratama', 'bank-bca', 'bank-bri', 'bank-mandiri',
            'baradinamika-mudasukses', 'baramulti', 'buana-laksa-abadi', 'dinas-pu', 'disperkim-kalsel',
            'gawi-plantation', 'gobel', 'indonesia-pratama', 'jaya-obayashi', 'kel', 'mas', 'minamas',
            'mitrabara-adiperdana', 'multi-structure', 'omexom', 'pam-group', 'petrosea', 'putra-perkasa-abadi',
            'wika', 'rskd', 'sukabumi', 'adaro-mining', 'antang-gunung', 'bara-alam-utama', 'batutua-tembaga-raya',
            'borneo-indobara', 'dahana', 'indokomas', 'ibp', 'mutiara-persada', 'ppa-amm', 'timuraya-jaya-lestari', 'trimitra'
          ];
          $per_slide = 5; // desktop default
          $total = count($clients);
          $chunks = array_chunk($clients, $per_slide);
          foreach ($chunks as $i => $chunk): ?>
            <div class="carousel-item<?php if ($i === 0) echo ' active'; ?>">
              <div class="row justify-content-center align-items-center g-3">
                <?php foreach ($chunk as $name): ?>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 animate__animated animate__fadeInUp">
                    <img src="/pjm/assets/img/customer/<?= $name ?>.jpg" class="img-fluid rounded shadow-sm" alt="<?= $name ?>">
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#clientsCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#clientsCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
</main>
<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/templates/public_template.php';
?>