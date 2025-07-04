<?php
$page_title = 'Layanan - Prohaba Jaya Mandiri';
$breadcrumb = [
  ['name' => 'Beranda', 'url' => '/pjm/index.php'],
  ['name' => 'Layanan']
];

ob_start();
?>

<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
      <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-briefcase me-2"></i>Layanan</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/pjm/index.php">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Layanan</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<main>
  <!-- Services Section -->
  <section id="services" class="py-5" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);" data-aos="fade-up">
    <div class="container">
      
      <div class="section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-2"><i class="bi bi-briefcase text-primary me-2"></i>Layanan Kami</h2>
        <p class="text-muted">Solusi konstruksi terpadu untuk berbagai kebutuhan infrastruktur dengan standar kualitas tertinggi.</p>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 service-card" data-bs-toggle="modal" data-bs-target="#modalBuilding">
            <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-building fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3 text-center">Konstruksi Bangunan</h5>
            <p class="text-muted small text-center mb-0">Menyediakan layanan konstruksi untuk gedung perkantoran, perumahan, fasilitas komersial, dan bangunan industri dengan standar kualitas tertinggi.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 service-card" data-bs-toggle="modal" data-bs-target="#modalRoad">
            <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-road fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3 text-center">Konstruksi Jalan & Infrastruktur</h5>
            <p class="text-muted small text-center mb-0">Spesialis dalam pembangunan dan pemeliharaan jalan raya, jalan tol, jembatan, serta infrastruktur pendukung lainnya untuk konektivitas yang lebih baik.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 service-card" data-bs-toggle="modal" data-bs-target="#modalElectric">
            <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-lightning-charge fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3 text-center">Infrastruktur Listrik</h5>
            <p class="text-muted small text-center mb-0">Pembangunan gardu induk, jaringan transmisi, dan distribusi listrik untuk mendukung kebutuhan energi perumahan, komersial, dan industri.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 service-card" data-bs-toggle="modal" data-bs-target="#modalDesignBuild">
            <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-easel fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3 text-center">Design & Build</h5>
            <p class="text-muted small text-center mb-0">Layanan terintegrasi mulai dari perencanaan desain hingga pelaksanaan konstruksi, memastikan koordinasi efisien dan hasil optimal.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 service-card" data-bs-toggle="modal" data-bs-target="#modalMaintenance">
            <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-tools fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3 text-center">Pemeliharaan Infrastruktur</h5>
            <p class="text-muted small text-center mb-0">Perawatan dan peningkatan infrastruktur secara berkala guna mempertahankan kinerja serta memperpanjang umur operasional aset.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Why Us Section -->
  <section id="why-us" class="bg-light py-5" data-aos="fade-up">
    <div class="container">
      
      <div class="section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-2"><i class="bi bi-star text-primary me-2"></i>Mengapa Memilih Kami</h2>
        <p class="text-muted">Keunggulan yang membedakan kami dalam industri konstruksi.</p>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 text-center">
            <div class="whyus-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-award-fill fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3">Keahlian & Pengalaman</h5>
            <p class="text-muted small text-center mb-0">Rekam jejak keberhasilan dalam berbagai proyek skala besar di seluruh Indonesia dengan tim profesional berpengalaman.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 text-center">
            <div class="whyus-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-check2-circle fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3">Komitmen Mutu</h5>
            <p class="text-muted small text-center mb-0">Penerapan standar kualitas internasional dan pengawasan ketat untuk memastikan hasil terbaik bagi klien.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card shadow-lg border-0 rounded-4 h-100 p-4 text-center">
            <div class="whyus-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
              <i class="bi bi-shield-check fs-1 text-primary bg-light rounded-circle p-3 shadow-sm"></i>
            </div>
            <h5 class="fw-bold mb-3">Keselamatan & Keberlanjutan</h5>
            <p class="text-muted small text-center mb-0">Prioritas tinggi pada keselamatan kerja dan praktik ramah lingkungan di setiap tahap proyek.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Detail Modals -->
  <!-- Modal: Konstruksi Bangunan -->
  <div class="modal fade" id="modalBuilding" tabindex="-1" aria-labelledby="modalBuildingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header border-0 bg-primary text-white">
          <h5 class="modal-title fw-bold" id="modalBuildingLabel">
            <i class="bi bi-building me-2"></i>Konstruksi Bangunan
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div class="row align-items-center">
            <div class="col-md-4 text-center mb-3 mb-md-0">
              <i class="bi bi-building display-1 text-primary"></i>
            </div>
            <div class="col-md-8">
              <p class="mb-3">Menyediakan layanan konstruksi lengkap untuk gedung perkantoran, perumahan, fasilitas komersial, dan bangunan industri. Tim kami memastikan kualitas dan ketepatan waktu pengerjaan dengan standar keselamatan tinggi.</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Gedung perkantoran dan komersial</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Perumahan dan apartemen</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Bangunan industri dan pabrik</li>
                <li><i class="bi bi-check-circle text-primary me-2"></i>Fasilitas pendidikan dan kesehatan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Konstruksi Jalan & Infrastruktur -->
  <div class="modal fade" id="modalRoad" tabindex="-1" aria-labelledby="modalRoadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header border-0 bg-primary text-white">
          <h5 class="modal-title fw-bold" id="modalRoadLabel">
            <i class="bi bi-road me-2"></i>Konstruksi Jalan & Infrastruktur
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div class="row align-items-center">
            <div class="col-md-4 text-center mb-3 mb-md-0">
              <i class="bi bi-road display-1 text-primary"></i>
            </div>
            <div class="col-md-8">
              <p class="mb-3">Kami berpengalaman dalam pembangunan dan pemeliharaan jalan raya, jalan tol, jembatan, serta infrastruktur pendukung lainnya. Solusi kami dirancang untuk meningkatkan konektivitas dan efisiensi transportasi.</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Jalan raya dan jalan tol</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Jembatan dan flyover</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Drainase dan saluran air</li>
                <li><i class="bi bi-check-circle text-primary me-2"></i>Infrastruktur transportasi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Infrastruktur Listrik -->
  <div class="modal fade" id="modalElectric" tabindex="-1" aria-labelledby="modalElectricLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header border-0 bg-primary text-white">
          <h5 class="modal-title fw-bold" id="modalElectricLabel">
            <i class="bi bi-lightning-charge me-2"></i>Infrastruktur Listrik
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div class="row align-items-center">
            <div class="col-md-4 text-center mb-3 mb-md-0">
              <i class="bi bi-lightning-charge display-1 text-primary"></i>
            </div>
            <div class="col-md-8">
              <p class="mb-3">Kami mengembangkan gardu induk, jaringan transmisi, dan distribusi listrik untuk memenuhi kebutuhan energi berbagai sektor. Fokus kami pada keandalan dan efisiensi energi.</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Gardu induk dan transformator</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Jaringan transmisi tegangan tinggi</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Sistem distribusi listrik</li>
                <li><i class="bi bi-check-circle text-primary me-2"></i>Instalasi listrik industri</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Design & Build -->
  <div class="modal fade" id="modalDesignBuild" tabindex="-1" aria-labelledby="modalDesignBuildLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header border-0 bg-primary text-white">
          <h5 class="modal-title fw-bold" id="modalDesignBuildLabel">
            <i class="bi bi-easel me-2"></i>Design & Build
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div class="row align-items-center">
            <div class="col-md-4 text-center mb-3 mb-md-0">
              <i class="bi bi-easel display-1 text-primary"></i>
            </div>
            <div class="col-md-8">
              <p class="mb-3">Kami menawarkan solusi menyeluruh mulai dari desain arsitektur, rekayasa struktur, hingga konstruksi akhir, memberikan waktu dan biaya yang lebih efisien.</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Desain arsitektur dan interior</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Rekayasa struktur dan MEP</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Manajemen proyek terpadu</li>
                <li><i class="bi bi-check-circle text-primary me-2"></i>Kontrol kualitas menyeluruh</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Pemeliharaan Infrastruktur -->
  <div class="modal fade" id="modalMaintenance" tabindex="-1" aria-labelledby="modalMaintenanceLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header border-0 bg-primary text-white">
          <h5 class="modal-title fw-bold" id="modalMaintenanceLabel">
            <i class="bi bi-tools me-2"></i>Pemeliharaan Infrastruktur
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div class="row align-items-center">
            <div class="col-md-4 text-center mb-3 mb-md-0">
              <i class="bi bi-tools display-1 text-primary"></i>
            </div>
            <div class="col-md-8">
              <p class="mb-3">Tim ahli kami melakukan inspeksi rutin, perbaikan, dan modernisasi infrastruktur untuk memastikan operasional yang andal dan aman.</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Inspeksi dan audit berkala</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Perbaikan dan pemeliharaan preventif</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Modernisasi dan upgrade sistem</li>
                <li><i class="bi bi-check-circle text-primary me-2"></i>Manajemen aset infrastruktur</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>