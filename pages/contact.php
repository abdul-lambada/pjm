<?php
$page_title = 'Kontak';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/'],
    ['name' => 'Kontak', 'url' => null]
];
ob_start();
?>

<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
            <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-envelope-fill me-2"></i>Kontak</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/pjm/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="contact" class="contact-section section py-5" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);">
  <div class="container">
    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
      <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8981774552035!2d116.87109037408045!3d-1.2305437355658728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1476c262ff2b3%3A0xbc5d2649ad924717!2sPT.%20Prohaba%20Jaya%20Mandiri!5e0!3m2!1sid!2sid!4v1746518920421!5m2!1sid!2sid" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi PT Prohaba Jaya Mandiri"></iframe>
      </div>
    </div>
    <div class="row g-4 align-items-stretch">
      <div class="col-lg-5 d-flex">
        <div class="card shadow-lg border-0 rounded-4 p-4 w-100 h-100 mb-4 mb-lg-0">
          <div class="mb-4">
            <div class="icon-circle bg-primary bg-opacity-10 text-primary mb-3 mx-auto d-flex align-items-center justify-content-center" style="width:56px; height:56px; border-radius:50%; font-size:2rem;">
              <i class="bi bi-geo-alt"></i>
            </div>
            <h5 class="fw-semibold mb-1 text-center">Alamat</h5>
            <p class="small text-center mb-0">JL. MT Haryono Komp. Ruko Tamansari Bukit Mutiara (WIKA) Blok A1. No. 09 RT.16, Gunung Samarinda Baru, Balikpapan Utara, Kalimantan Timur</p>
          </div>
          <div class="mb-4">
            <div class="icon-circle bg-primary bg-opacity-10 text-primary mb-3 mx-auto d-flex align-items-center justify-content-center" style="width:56px; height:56px; border-radius:50%; font-size:2rem;">
              <i class="bi bi-telephone"></i>
            </div>
            <h5 class="fw-semibold mb-1 text-center">Telepon</h5>
            <p class="small text-center mb-0">0542-873295</p>
          </div>
          <div>
            <div class="icon-circle bg-primary bg-opacity-10 text-primary mb-3 mx-auto d-flex align-items-center justify-content-center" style="width:56px; height:56px; border-radius:50%; font-size:2rem;">
              <i class="bi bi-envelope"></i>
            </div>
            <h5 class="fw-semibold mb-1 text-center">Email</h5>
            <p class="small text-center mb-0">administration@prohabajayagroup.co.id</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-flex">
        <div class="card shadow-lg border-0 rounded-4 p-4 w-100 h-100">
          <form action="/pjm/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200" autocomplete="off">
            <div class="row gy-4">
              <div class="col-md-6">
                <label for="contact-name" class="form-label">Nama</label>
                <input type="text" name="name" id="contact-name" class="form-control" placeholder="Nama Anda" required>
              </div>
              <div class="col-md-6">
                <label for="contact-email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Email Anda" required>
              </div>
              <div class="col-md-12">
                <label for="contact-subject" class="form-label">Subjek</label>
                <input type="text" class="form-control" name="subject" id="contact-subject" placeholder="Subjek" required>
              </div>
              <div class="col-md-12">
                <label for="contact-message" class="form-label">Pesan</label>
                <textarea class="form-control" name="message" id="contact-message" rows="6" placeholder="Pesan" required></textarea>
              </div>
              <div class="col-md-12 text-center">
                <div class="loading" style="display:none;">Loading...</div>
                <div class="error-message text-danger small" style="display:none;"></div>
                <div class="sent-message text-success small" style="display:none;">Pesan Anda telah terkirim. Terima kasih!</div>
                <button type="submit" class="btn btn-primary px-4 py-2 mt-2">Kirim Pesan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.contact-section .icon-circle {
  box-shadow: 0 2px 8px rgba(44,62,80,0.07);
}
</style>

<script src="/pjm/assets/js/contact-form.js"></script>
<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>