<?php
$page_title = 'Beranda';
// Untuk halaman beranda, breadcrumb biasanya tidak diperlukan, jadi kita kosongkan array-nya.
$breadcrumb = []; 
ob_start();
?>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="/pjm/assets/img/sampul.jpg" alt="Prohaba Jaya Mandiri" data-aos="fade-in">
      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">PROHABA<br>JAYA MANDIRI</h2>
        <p data-aos="fade-up" data-aos-delay="200">Better, Faster and Efective Cost.</p>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="/pjm/assets/img/prohaba-teamwork.jpg" class="img-fluid" alt="Prohaba Teamwork">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Tim dan Manajemen Kerja</h3>
            <p style="text-align: justify;">
              Dengan ini menyatakan perusahaan kami tidak dalam pengawasan Pengadilan, tidak bangkrut, dan tidak sedang dihentikan kegiatan usahanya dan siap bekerja sama dengan pemerintah maupun swasta.
            </p>
            <p style="text-align: justify;">
              Bekerja sama mengemban Amanah, Rasa memiliki, dan Memberi. Dengan Skill profesional, Jujur, dan Bertanggung Jawab Maju dan Sukses Bersama.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center" style="border: 2px solid #ccc; border-radius: 10px;">
                  <i class="bi bi-lightbulb"></i>
                  <h4>VISI</h4>
                  <p>Prohaba Jaya Mandiri berkualitas menjadi perusahaan terbaik di Indonesia dengan mengedepankan Kejujuran, Keikhlasan dan Amanah</p>
                </div>
              </div><!-- End Icon Box -->
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center" style="border: 2px solid #ccc; border-radius: 10px;">
                  <i class="bi bi-bullseye"></i>
                  <h4>MISI</h4>
                  <p>Mengutamakan kepuasan pelanggan dengan menghasilkan produk yang bermutu tinggi sesuai dengan permintaan Pelanggan / Customer</p>
                </div>
              </div><!-- End Icon Box -->
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center" style="border: 2px solid #ccc; border-radius: 10px;">
                  <i class="bi bi-gem"></i>
                  <h4>VALUE</h4>
                  <p>Action, Accountable, Inovative, Optimal and Neat.</p>
                </div>
              </div><!-- End Icon Box -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Why Us Section -->

    <!-- Berita Section -->
    <section id="trainers-index" class="section trainers-index">
      <div class="container">
        <h3 style="text-align: center;"><strong>Berita Terbaru</strong></h3>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
            <div class="member">
              <img src="/pjm/assets/img/new/c.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Open Storage site BIB</h4>
                <p>Proyek Pembangunan Open Storage site BIB.</p>
                <a class="btn btn-outline-secondary btn-sm" href="/pjm/pages/berita1.php" role="button">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
            <div class="member">
              <img src="/pjm/assets/img/new/b.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Workshop Support site BIB</h4>
                <p>Proyek Pembangunan Workshop Support site BIB.</p>
                <a class="btn btn-outline-secondary btn-sm" href="/pjm/pages/berita2.php" role="button">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
            <div class="member">
              <img src="/pjm/assets/img/new/a.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Ruang Induksi site BIB</h4>
                <p>Proyek Pembangunan Ruang Induksi site BIB</p>
                <a class="btn btn-outline-secondary btn-sm" href="/pjm/pages/berita3.php" role="button">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
            <div class="member">
              <img src="/pjm/assets/img/new/d.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Washpad HD 2 BAY site BIB</h4>
                <p>Proyek Pembangunan Washpad HD 2 BAY site BIB</p>
                <a class="btn btn-outline-secondary btn-sm" href="/pjm/pages/berita4.php" role="button">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
            <div class="member">
              <img src="/pjm/assets/img/new/e.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Workshop HD 4 BAY site BIB</h4>
                <p>Proyek Pembangunan Washpad HD 4 BAY site BIB</p>
                <a class="btn btn-outline-secondary btn-sm" href="/pjm/pages/berita5.php" role="button">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Klien Section -->
    <section id="features" class="features section">
      <div class="container">
        <h4 style="text-align: center;"><strong>Klien Kami</strong></h4>
        <div class="slider">
          <div><img src="/pjm/assets/img/customer/abp-energy.jpg" alt="abp-energy"></div>
          <div><img src="/pjm/assets/img/customer/adimitra-baratama.jpg" alt="adimitra-baratama"></div>
          <div><img src="/pjm/assets/img/customer/bank-bca.jpg" alt="bank-bca"></div>
          <div><img src="/pjm/assets/img/customer/bank-bri.jpg" alt="bank-bri"></div>
          <div><img src="/pjm/assets/img/customer/bank-mandiri.jpg" alt="bank-mandiri"></div>
          <div><img src="/pjm/assets/img/customer/baradinamika-mudasukses.jpg" alt="baradinamika-mudasukses"></div>
          <div><img src="/pjm/assets/img/customer/baramulti.jpg" alt="baramulti"></div>
          <div><img src="/pjm/assets/img/customer/buana-laksa-abadi.jpg" alt="buana-laksa-abadi"></div>
          <div><img src="/pjm/assets/img/customer/dinas-pu.jpg" alt="dinas-pu"></div>
          <div><img src="/pjm/assets/img/customer/disperkim-kalsel.jpg" alt="disperkim-kalsel"></div>
          <div><img src="/pjm/assets/img/customer/gawi-plantation.jpg" alt="gawi-plantation"></div>
          <div><img src="/pjm/assets/img/customer/gobel.jpg" alt="gobel"></div>
          <div><img src="/pjm/assets/img/customer/indonesia-pratama.jpg" alt="indonesia-pratama.jpg"></div>
          <div><img src="/pjm/assets/img/customer/jaya-obayashi.jpg" alt="jaya-obayashi"></div>
          <div><img src="/pjm/assets/img/customer/kel.jpg" alt="kel"></div>
          <div><img src="/pjm/assets/img/customer/mas.jpg" alt="mas"></div>
          <div><img src="/pjm/assets/img/customer/minamas.jpg" alt="minamas"></div>
          <div><img src="/pjm/assets/img/customer/mitrabara-adiperdana.jpg" alt="mitrabara-adiperdana"></div>
          <div><img src="/pjm/assets/img/customer/multi-structure.jpg" alt="multi-structure"></div>
          <div><img src="/pjm/assets/img/customer/omexom.jpg" alt="omexom"></div>
          <div><img src="/pjm/assets/img/customer/pam-group.jpg" alt="pam-group"></div>
          <div><img src="/pjm/assets/img/customer/petrosea.jpg" alt="petrosea"></div>
          <div><img src="/pjm/assets/img/customer/putra-perkasa-abadi.jpg" alt="putra-perkasa-abadi"></div>
          <div><img src="/pjm/assets/img/customer/wika.jpg" alt="wika"></div>
          <div><img src="/pjm/assets/img/customer/rskd.jpg" alt="rskd"></div>
          <div><img src="/pjm/assets/img/customer/sukabumi.jpg" alt="sukabumi"></div>
          <div><img src="/pjm/assets/img/customer/adaro-mining.jpg" alt="adaro-mining"></div>
          <div><img src="/pjm/assets/img/customer/antang-gunung.jpg" alt="antang-gunung"></div>
          <div><img src="/pjm/assets/img/customer/bara-alam-utama.jpg" alt="bara-alam-utama"></div>
          <div><img src="/pjm/assets/img/customer/batutua-tembaga-raya.jpg" alt="batutua-tembaga-raya"></div>
          <div><img src="/pjm/assets/img/customer/borneo-indobara.jpg" alt="borneo-indobara"></div>
          <div><img src="/pjm/assets/img/customer/dahana.jpg" alt="dahana"></div>
          <div><img src="/pjm/assets/img/customer/indokomas.jpg" alt="indokomas"></div>
          <div><img src="/pjm/assets/img/customer/ibp.jpg" alt="ibp"></div>
          <div><img src="/pjm/assets/img/customer/mutiara-persada.jpg" alt="mutiara-persada"></div>
          <div><img src="/pjm/assets/img/customer/ppa-amm.jpg" alt="ppa-amm"></div>
          <div><img src="/pjm/assets/img/customer/timuraya-jaya-lestari.jpg" alt="timuraya-jaya-lestari"></div>
          <div><img src="/pjm/assets/img/customer/trimitra.jpg" alt="trimitra"></div>
        </div>
      </div>
    </section>

</main>
<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/templates/public_template.php';
?>
