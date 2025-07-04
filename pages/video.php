<?php
$page_title = 'Video - Prohaba Jaya Mandiri';
$breadcrumb = [
  ['name' => 'Beranda', 'url' => '/pjm/index.php'],
  ['name' => 'Video']
];

ob_start();
?>

<!-- Page Header / Judul Menu -->
<section class="page-header py-4 bg-white border-bottom mb-4">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
      <h1 class="h3 fw-bold mb-0 text-primary"><i class="bi bi-play-circle me-2"></i>Video</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/pjm/index.php">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Video</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<main class="main">

  <!-- Video Section -->
  <section id="video" class="video section py-5" style="background: linear-gradient(135deg, #f8fafb 0%, #e8f5f1 100%);">
    <div class="container">

      <!-- Section Title -->
      <div class="section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-2"><i class="bi bi-play-circle text-primary me-2"></i>Video Dokumentasi Proyek</h2>
        <p class="text-muted">Saksikan dokumentasi visual dari berbagai proyek konstruksi yang telah kami selesaikan dengan sukses.</p>
      </div>

      <!-- Video Filters -->
      <div class="video-filters d-flex justify-content-center flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-delay="100">
        <button class="btn btn-sm btn-outline-primary rounded-pill active" data-filter="*">Semua Video</button>
        <button class="btn btn-sm btn-outline-primary rounded-pill" data-filter=".filter-construction">Konstruksi</button>
        <button class="btn btn-sm btn-outline-primary rounded-pill" data-filter=".filter-infrastructure">Infrastruktur</button>
        <button class="btn btn-sm btn-outline-primary rounded-pill" data-filter=".filter-workshop">Workshop</button>
      </div>

      <!-- Video Grid -->
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

        <!-- Video Item 1 -->
        <div class="col-lg-6 col-md-6 video-item filter-construction">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 video-card">
            <div class="video-container position-relative">
              <iframe 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                title="Proyek Konstruksi Gedung Perkantoran"
                class="w-100"
                style="height: 250px;"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
            <div class="video-info p-3">
              <h4 class="fw-bold mb-1">Proyek Konstruksi Gedung Perkantoran</h4>
              <p class="small mb-2 text-muted">Site Balikpapan</p>
              <p class="small mb-0">Dokumentasi lengkap proses pembangunan gedung perkantoran 3 lantai dengan standar kualitas tinggi.</p>
            </div>
          </div>
        </div>

        <!-- Video Item 2 -->
        <div class="col-lg-6 col-md-6 video-item filter-infrastructure">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 video-card">
            <div class="video-container position-relative">
              <iframe 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                title="Pembangunan Jembatan dan Jalan"
                class="w-100"
                style="height: 250px;"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
            <div class="video-info p-3">
              <h4 class="fw-bold mb-1">Pembangunan Jembatan dan Jalan</h4>
              <p class="small mb-2 text-muted">Site Kalimantan Timur</p>
              <p class="small mb-0">Proses konstruksi jembatan dan jalan tol yang menghubungkan kawasan industri dengan pusat kota.</p>
            </div>
          </div>
        </div>

        <!-- Video Item 3 -->
        <div class="col-lg-6 col-md-6 video-item filter-workshop">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 video-card">
            <div class="video-container position-relative">
              <iframe 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                title="Pembangunan Workshop dan Fasilitas Industri"
                class="w-100"
                style="height: 250px;"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
            <div class="video-info p-3">
              <h4 class="fw-bold mb-1">Pembangunan Workshop dan Fasilitas Industri</h4>
              <p class="small mb-2 text-muted">Site BIB</p>
              <p class="small mb-0">Konstruksi workshop modern dengan fasilitas lengkap untuk mendukung operasional industri.</p>
            </div>
          </div>
        </div>

        <!-- Video Item 4 -->
        <div class="col-lg-6 col-md-6 video-item filter-construction">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 video-card">
            <div class="video-container position-relative">
              <iframe 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                title="Pembangunan Mess dan Fasilitas Hunian"
                class="w-100"
                style="height: 250px;"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
            <div class="video-info p-3">
              <h4 class="fw-bold mb-1">Pembangunan Mess dan Fasilitas Hunian</h4>
              <p class="small mb-2 text-muted">Site MIFA</p>
              <p class="small mb-0">Pembangunan kompleks mess untuk karyawan dengan fasilitas hunian yang nyaman dan aman.</p>
            </div>
          </div>
        </div>

        <!-- Video Item 5 -->
        <div class="col-lg-6 col-md-6 video-item filter-infrastructure">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 video-card">
            <div class="video-container position-relative">
              <iframe 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                title="Pembangunan Infrastruktur Listrik"
                class="w-100"
                style="height: 250px;"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
            <div class="video-info p-3">
              <h4 class="fw-bold mb-1">Pembangunan Infrastruktur Listrik</h4>
              <p class="small mb-2 text-muted">Site Namlea</p>
              <p class="small mb-0">Instalasi gardu induk dan jaringan distribusi listrik untuk mendukung kebutuhan industri.</p>
            </div>
          </div>
        </div>

        <!-- Video Item 6 -->
        <div class="col-lg-6 col-md-6 video-item filter-workshop">
          <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100 video-card">
            <div class="video-container position-relative">
              <iframe 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                title="Pembangunan Fasilitas Olahraga dan Rekreasi"
                class="w-100"
                style="height: 250px;"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
            <div class="video-info p-3">
              <h4 class="fw-bold mb-1">Pembangunan Fasilitas Olahraga dan Rekreasi</h4>
              <p class="small mb-2 text-muted">Site Lahat</p>
              <p class="small mb-0">Konstruksi sport center dan fasilitas rekreasi untuk meningkatkan kualitas hidup karyawan.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Call to Action -->
      <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-lg border-0 rounded-4 p-4 bg-primary text-white">
          <h3 class="fw-bold mb-3">Ingin Melihat Proyek Kami Lebih Detail?</h3>
          <p class="mb-4">Hubungi kami untuk konsultasi dan informasi lebih lanjut tentang layanan konstruksi kami.</p>
          <a href="/pjm/pages/contact.php" class="btn btn-light btn-lg rounded-pill">
            <i class="bi bi-telephone me-2"></i>Hubungi Kami
          </a>
        </div>
      </div>

    </div>
  </section><!-- /Video Section -->

</main>

<style>
.video-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.video-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.video-container {
  background: #000;
  border-radius: 0.5rem 0.5rem 0 0;
  overflow: hidden;
}

.video-container iframe {
  border-radius: 0.5rem 0.5rem 0 0;
}

.video-filters .btn {
  transition: all 0.3s ease;
}

.video-filters .btn.active {
  background-color: var(--bs-primary);
  color: white;
  border-color: var(--bs-primary);
}

.video-item {
  display: block;
}

.video-item.hidden {
  display: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Video filter functionality
  const filterButtons = document.querySelectorAll('.video-filters .btn');
  const videoItems = document.querySelectorAll('.video-item');

  filterButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Remove active class from all buttons
      filterButtons.forEach(btn => btn.classList.remove('active'));
      // Add active class to clicked button
      this.classList.add('active');

      const filter = this.getAttribute('data-filter');

      videoItems.forEach(item => {
        if (filter === '*' || item.classList.contains(filter.replace('.', ''))) {
          item.style.display = 'block';
          item.classList.remove('hidden');
        } else {
          item.style.display = 'none';
          item.classList.add('hidden');
        }
      });
    });
  });
});
</script>

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>