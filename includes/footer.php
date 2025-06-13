  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/pjm/index.php" class="logo d-flex align-items-center">
            <span class="sitename">Prohaba Jaya Mandiri</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. G. Obos XV, Komp. Ruko 3G No. 2</p>
            <p>Palangka Raya, Kalimantan Tengah</p>
            <p class="mt-3"><strong>Phone:</strong> <span>(0536) 3226305</span></p>
            <p><strong>Email:</strong> <span>prohabajaya.mandiri@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/pjm/index.php">Beranda</a></li>
            <li><a href="/pjm/pages/introduction.php">Tentang Kami</a></li>
            <li><a href="/pjm/pages/service.php">Layanan</a></li>
            <li><a href="/pjm/pages/project.php">Proyek</a></li>
            <li><a href="/pjm/pages/contact.php">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Konstruksi Bangunan</a></li>
            <li><a href="#">Konstruksi Jalan</a></li>
            <li><a href="#">Infrastruktur Listrik</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Prohaba Jaya Mandiri</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/pjm/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/pjm/assets/vendor/php-email-form/validate.js"></script>
  <script src="/pjm/assets/vendor/aos/aos.js"></script>
  <script src="/pjm/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/pjm/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/pjm/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/pjm/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Slick Carousel JS -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Main JS File -->
  <script src="/pjm/assets/js/main.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.row-berita').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1200,
        responsive: [ // Untuk responsivitas
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });

      $('.slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [ // Untuk responsivitas
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 5
            }
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    });
  </script>
  </body>

  </html>