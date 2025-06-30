<?php
$page_title = 'K3 Policy';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/'],
    ['name' => 'K3 Policy', 'url' => null]
];
ob_start();
?>

<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
      <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-shield-check me-2"></i>Kebijakan K3</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/pjm/">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kebijakan K3</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<section id="courses" class="courses section" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);">

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4 p-4 bg-white">
                    <h3 class="fw-bold text-center mb-4 text-gradient">Kebijakan Keselamatan dan Kesehatan Kerja</h3>
                    <div class="desc">
                        <h6 class="mb-3 lh-base text-justify"><strong>PT. PROHABA JAYA MANDIRI</strong> sebagai perusahaan yang bergerak di bidang General Contractor & Supplier, bertekad untuk memberikan kepuasan pelanggan setinggi-tingginya tanpa mengabaikan aspek kesehatan, keselamatan kerja dan kelestarian lingkungan melalui komitmen sebagai berikut:</h6>
                        <ol type="1" class="mb-3">
                            <li class="mb-2">Menciptakan budaya perusahaan yang mengutamakan kesehatan, keselamatan kerja, kelestarian lingkungan, kemandirian, ketangguhan, dan pencapaian kualitas yang optimal sesuai dengan keinginan pelanggan, peraturan perundang-undangan atau ketentuan lain yang berlaku.</li>
                            <li class="mb-2">Aktif dalam menjaga kelestarian lingkungan dengan mensinergikan pemanfaatan sumber daya alam budaya dan mengendalikan dampak lingkungan yang mungkin timbul sebagai akibat dari kegiatan, produk, dan jasa perusahaan.</li>
                            <li class="mb-2">Mengkomunikasikan kebijakan ini kepada seluruh karyawan atau pihak-pihak yang berkepentingan agar setiap karyawan menyadari kewajibannya terhadap kualitas, kesehatan dan keselamatan kerja, serta kelestarian lingkungan.</li>
                            <li class="mb-2">Meninjau kembali kebijakan ini secara berkala untuk meninjau relevansi dan kesesuaiannya dengan perubahan yang dialami perusahaan.</li>
                        </ol>
                        <h6 class="lh-base text-justify">Sebagai sarana untuk mewujudkan kebijakan, perusahaan menerapkan dan mengintegrasikan Sistem Manajemen Mutu ISO 9001:2015 dan Sistem Manajemen Keselamatan dan Kesehatan Kerja ISO 45001:2018 serta Sistem Manajemen Lingkungan ISO 14001:2015 dan secara berkesinambungan terus meningkatkan kinerjanya.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm border-0 rounded-4 h-100 p-3 text-center">
                    <h5 class="fw-semibold mb-3">Struktur P2K3</h5>
                    <img src="/pjm/assets/img/Struktur P2K3.drawio.png" class="img-fluid rounded shadow-sm" alt="Struktur P2K3 Prohaba Jaya Mandiri">
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm border-0 rounded-4 h-100 p-3 text-center">
                    <h5 class="fw-semibold mb-3">Struktur Sistem Manajemen, Kesehatan & Keselamatan Kerja dan Lingkungan</h5>
                    <img src="/pjm/assets/img/Struktur Sistem Manajemen, Kesehatan & Keselamatan Kerja dan Lingkungan.drawio.png" class="img-fluid rounded shadow-sm" alt="Struktur Sistem Manajemen, Kesehatan & Keselamatan Kerja dan Lingkungan">
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-sm border-0 rounded-4 h-100 p-3 text-center">
                    <h5 class="fw-semibold mb-3">Struktur Komite Sistem Manajemen Lingkungan</h5>
                    <img src="/pjm/assets/img/Struktur Komite Sistem Manajemen Lingkungan.drawio.png" class="img-fluid rounded shadow-sm" alt="Struktur Komite Sistem Manajemen Lingkungan">
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-6" data-aos="zoom-in">
                <div class="card shadow-lg border-0 rounded-4 p-3 text-center">
                    <img src="/pjm/assets/img/sertifikasi.png" class="img-fluid rounded mb-2" alt="Sertifikasi">
                </div>
            </div>
        </div>
    </div>

</section><!-- /Courses Section -->

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>