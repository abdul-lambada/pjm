<?php
$page_title = 'Layanan';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/'],
    ['name' => 'Layanan', 'url' => null]
];
ob_start();
?>

<section id="services" class="services section py-5">
    <div class="container">
        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalBuilding">
                    <i class="bi bi-building icon"></i>
                    <h3>Konstruksi Bangunan</h3>
                    <p>Menyediakan layanan konstruksi untuk gedung perkantoran, perumahan, fasilitas komersial, dan bangunan industri dengan standar kualitas tertinggi.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalRoad">
                    <i class="bi bi-road icon"></i>
                    <h3>Konstruksi Jalan & Infrastruktur</h3>
                    <p>Spesialis dalam pembangunan dan pemeliharaan jalan raya, jalan tol, jembatan, serta infrastruktur pendukung lainnya untuk konektivitas yang lebih baik.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalElectric">
                    <i class="bi bi-lightning-charge icon"></i>
                    <h3>Infrastruktur Listrik</h3>
                    <p>Pembangunan gardu induk, jaringan transmisi, dan distribusi listrik untuk mendukung kebutuhan energi perumahan, komersial, dan industri.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- New Service Item: Design & Build -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item item-purple position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalDesignBuild">
                    <i class="bi bi-easel icon"></i>
                    <h3>Design &amp; Build</h3>
                    <p>Layanan terintegrasi mulai dari perencanaan desain hingga pelaksanaan konstruksi, memastikan koordinasi efisien dan hasil optimal.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- New Service Item: Pemeliharaan Infrastruktur -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item item-yellow position-relative cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalMaintenance">
                    <i class="bi bi-tools icon"></i>
                    <h3>Pemeliharaan Infrastruktur</h3>
                    <p>Perawatan dan peningkatan infrastruktur secara berkala guna mempertahankan kinerja serta memperpanjang umur operasional aset.</p>
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
                    <p>Menyediakan layanan konstruksi lengkap untuk gedung perkantoran, perumahan, fasilitas komersial, dan bangunan industri. Tim kami memastikan kualitas dan ketepatan waktu pengerjaan dengan standar keselamatan tinggi.</p>
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
                    <p>Kami berpengalaman dalam pembangunan dan pemeliharaan jalan raya, jalan tol, jembatan, serta infrastruktur pendukung lainnya. Solusi kami dirancang untuk meningkatkan konektivitas dan efisiensi transportasi.</p>
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
                    <p>Kami mengembangkan gardu induk, jaringan transmisi, dan distribusi listrik untuk memenuhi kebutuhan energi berbagai sektor. Fokus kami pada keandalan dan efisiensi energi.</p>
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
            <p>Kami menawarkan solusi menyeluruh mulai dari desain arsitektur, rekayasa struktur, hingga konstruksi akhir, memberikan waktu dan biaya yang lebih efisien.</p>
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
            <p>Tim ahli kami melakukan inspeksi rutin, perbaikan, dan modernisasi infrastruktur untuk memastikan operasional yang andal dan aman.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Service Detail Modals -->

</section><!-- /Services Section -->

<!-- Why Us Section -->
<section id="why-us" class="why-us section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <i class="bi bi-award-fill icon"></i>
          <h4>Keahlian &amp; Pengalaman</h4>
          <p>Rekam jejak keberhasilan dalam berbagai proyek skala besar di seluruh Indonesia dengan tim profesional berpengalaman.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          <i class="bi bi-check2-circle icon"></i>
          <h4>Komitmen Mutu</h4>
          <p>Penerapan standar kualitas internasional dan pengawasan ketat untuk memastikan hasil terbaik bagi klien.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
          <i class="bi bi-shield-check icon"></i>
          <h4>Keselamatan &amp; Keberlanjutan</h4>
          <p>Prioritas tinggi pada keselamatan kerja dan praktik ramah lingkungan di setiap tahap proyek.</p>
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