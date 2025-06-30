<?php
$page_title = 'Layanan';
$breadcrumb = [
  ['name' => 'Beranda', 'url' => '/pjm/'],
  ['name' => 'Layanan', 'url' => null]
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
          <li class="breadcrumb-item"><a href="/pjm/">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Layanan</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<section id="services" class="services section py-5" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);">
  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card service-card shadow-sm border-0 rounded-4 h-100 p-4 mb-2 service-item item-cyan position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalBuilding">
          <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-building icon"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-center">Konstruksi Bangunan</h5>
            <p class="text-secondary small text-center mb-0">Menyediakan layanan konstruksi untuk gedung perkantoran, perumahan, fasilitas komersial, dan bangunan industri dengan standar kualitas tertinggi.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card service-card shadow-sm border-0 rounded-4 h-100 p-4 mb-2 service-item item-orange position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalRoad">
          <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-road icon"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-center">Konstruksi Jalan & Infrastruktur</h5>
            <p class="text-secondary small text-center mb-0">Spesialis dalam pembangunan dan pemeliharaan jalan raya, jalan tol, jembatan, serta infrastruktur pendukung lainnya untuk konektivitas yang lebih baik.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card service-card shadow-sm border-0 rounded-4 h-100 p-4 mb-2 service-item item-teal position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalElectric">
          <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-lightning-charge icon"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-center">Infrastruktur Listrik</h5>
            <p class="text-secondary small text-center mb-0">Pembangunan gardu induk, jaringan transmisi, dan distribusi listrik untuk mendukung kebutuhan energi perumahan, komersial, dan industri.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- New Service Item: Design & Build -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card service-card shadow-sm border-0 rounded-4 h-100 p-4 mb-2 service-item item-purple position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalDesignBuild">
          <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-easel icon"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-center">Design &amp; Build</h5>
            <p class="text-secondary small text-center mb-0">Layanan terintegrasi mulai dari perencanaan desain hingga pelaksanaan konstruksi, memastikan koordinasi efisien dan hasil optimal.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- New Service Item: Pemeliharaan Infrastruktur -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="card service-card shadow-sm border-0 rounded-4 h-100 p-4 mb-2 service-item item-yellow position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalMaintenance">
          <div class="service-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-tools icon"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-center">Pemeliharaan Infrastruktur</h5>
            <p class="text-secondary small text-center mb-0">Perawatan dan peningkatan infrastruktur secara berkala guna mempertahankan kinerja serta memperpanjang umur operasional aset.</p>
        </div>
      </div><!-- End Service Item -->

    </div>
  </div>
  <!-- Service Detail Modals -->
  <!-- Modal: Konstruksi Bangunan -->
  <div class="modal fade" id="modalBuilding" tabindex="-1" aria-labelledby="modalBuildingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBuildingLabel">Konstruksi Bangunan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-secondary small text-center mb-0">Menyediakan layanan konstruksi lengkap untuk gedung perkantoran, perumahan, fasilitas komersial, dan bangunan industri. Tim kami memastikan kualitas dan ketepatan waktu pengerjaan dengan standar keselamatan tinggi.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Konstruksi Jalan & Infrastruktur -->
  <div class="modal fade" id="modalRoad" tabindex="-1" aria-labelledby="modalRoadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRoadLabel">Konstruksi Jalan &amp; Infrastruktur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-secondary small text-center mb-0">Kami berpengalaman dalam pembangunan dan pemeliharaan jalan raya, jalan tol, jembatan, serta infrastruktur pendukung lainnya. Solusi kami dirancang untuk meningkatkan konektivitas dan efisiensi transportasi.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Infrastruktur Listrik -->
  <div class="modal fade" id="modalElectric" tabindex="-1" aria-labelledby="modalElectricLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalElectricLabel">Infrastruktur Listrik</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-secondary small text-center mb-0">Kami mengembangkan gardu induk, jaringan transmisi, dan distribusi listrik untuk memenuhi kebutuhan energi berbagai sektor. Fokus kami pada keandalan dan efisiensi energi.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Design & Build -->
  <div class="modal fade" id="modalDesignBuild" tabindex="-1" aria-labelledby="modalDesignBuildLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDesignBuildLabel">Design &amp; Build</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-secondary small text-center mb-0">Kami menawarkan solusi menyeluruh mulai dari desain arsitektur, rekayasa struktur, hingga konstruksi akhir, memberikan waktu dan biaya yang lebih efisien.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Pemeliharaan Infrastruktur -->
  <div class="modal fade" id="modalMaintenance" tabindex="-1" aria-labelledby="modalMaintenanceLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalMaintenanceLabel">Pemeliharaan Infrastruktur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-secondary small text-center mb-0">Tim ahli kami melakukan inspeksi rutin, perbaikan, dan modernisasi infrastruktur untuk memastikan operasional yang andal dan aman.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service Detail Modals -->

</section><!-- /Services Section -->

<!-- Why Us Section -->
<section id="why-us" class="why-us section" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card whyus-card shadow-sm border-0 rounded-4 h-100 p-4 text-center">
          <div class="whyus-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-award-fill icon"></i>
          </div>
          <h5 class="fw-semibold mb-2">Keahlian &amp; Pengalaman</h5>
          <p class="text-secondary small text-center mb-0">Rekam jejak keberhasilan dalam berbagai proyek skala besar di seluruh Indonesia dengan tim profesional berpengalaman.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card whyus-card shadow-sm border-0 rounded-4 h-100 p-4 text-center">
          <div class="whyus-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-check2-circle icon"></i>
          </div>
          <h5 class="fw-semibold mb-2">Komitmen Mutu</h5>
          <p class="text-secondary small text-center mb-0">Penerapan standar kualitas internasional dan pengawasan ketat untuk memastikan hasil terbaik bagi klien.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card whyus-card shadow-sm border-0 rounded-4 h-100 p-4 text-center">
          <div class="whyus-icon mb-3 d-flex align-items-center justify-content-center mx-auto">
            <i class="bi bi-shield-check icon"></i>
          </div>
          <h5 class="fw-semibold mb-2">Keselamatan &amp; Keberlanjutan</h5>
          <p class="text-secondary small text-center mb-0">Prioritas tinggi pada keselamatan kerja dan praktik ramah lingkungan di setiap tahap proyek.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Why Us Section -->

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>