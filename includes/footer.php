  <footer id="footer" class="footer footer-modern position-relative py-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="card border-0 shadow footer-card p-4 p-md-5 bg-gradient-modern">
            <div class="d-flex flex-column flex-md-row align-items-stretch justify-content-between gap-4">
              <!-- About & Contact -->
              <div class="footer-about flex-fill text-md-start text-center d-flex flex-column justify-content-between">
                <a href="/pjm/index.php" class="logo d-inline-flex align-items-center mb-2 mb-md-3 justify-content-md-start justify-content-center">
                  <span class="sitename fs-4 fw-bold text-gradient">Prohaba Jaya Mandiri</span>
                </a>
                <div class="footer-contact mb-2 mb-md-3">
                  <address class="mb-1">Jl. G. Obos XV, Komp. Ruko 3G No. 2</address>
                  <address class="mb-1">Palangka Raya, Kalimantan Tengah</address>
                  <p class="mb-1"><i class="bi bi-telephone me-2" aria-hidden="true"></i><strong class="visually-hidden">Phone:</strong> <a href="tel:+625363226305" class="text-decoration-none text-dark">(0536) 3226305</a></p>
                  <p class="mb-1"><i class="bi bi-envelope me-2" aria-hidden="true"></i><strong class="visually-hidden">Email:</strong> <a href="mailto:prohabajaya.mandiri@gmail.com" class="text-decoration-none text-dark">prohabajaya.mandiri@gmail.com</a></p>
                </div>
                <div class="social-links d-flex justify-content-md-start justify-content-center gap-2 gap-md-3 mt-2">
                  <a href="#" class="footer-social-link" aria-label="Twitter" target="_blank" rel="noopener"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="footer-social-link" aria-label="Facebook" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="footer-social-link" aria-label="Instagram" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="footer-social-link" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
                  <a href="mailto:prohabajaya.mandiri@gmail.com" class="footer-social-link" aria-label="Email"><i class="bi bi-envelope-at"></i></a>
                </div>
              </div>
              <!-- Useful Links -->
              <div class="footer-links flex-fill text-center text-md-start">
                <h5 class="fw-semibold mb-3 d-flex align-items-center justify-content-center justify-content-md-start"><i class="bi bi-link-45deg me-2"></i>Useful Links</h5>
                <ul class="list-unstyled mb-0">
                  <li><a href="/pjm/index.php" class="footer-link">Beranda</a></li>
                  <li><a href="/pjm/pages/introduction.php" class="footer-link">Tentang Kami</a></li>
                  <li><a href="/pjm/pages/service.php" class="footer-link">Layanan</a></li>
                  <li><a href="/pjm/pages/project.php" class="footer-link">Proyek</a></li>
                  <li><a href="/pjm/pages/contact.php" class="footer-link">Kontak</a></li>
                </ul>
              </div>
              <!-- Our Services -->
              <div class="footer-services flex-fill text-center text-md-start">
                <h5 class="fw-semibold mb-3 d-flex align-items-center justify-content-center justify-content-md-start"><i class="bi bi-tools me-2"></i>Our Services</h5>
                <ul class="list-unstyled mb-0">
                  <li><a href="#" class="footer-link">Konstruksi Bangunan</a></li>
                  <li><a href="#" class="footer-link">Konstruksi Jalan</a></li>
                  <li><a href="#" class="footer-link">Infrastruktur Listrik</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <small class="text-secondary">&copy; <span id="copyright-year"></span> <strong class="sitename">Prohaba Jaya Mandiri</strong> All Rights Reserved. | <span class="text-gradient">Modern Footer UI</span></small>
        </div>
      </div>
    </div>
    <script>
      document.getElementById('copyright-year').textContent = new Date().getFullYear();
    </script>
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
  <!-- Isotope JS (CDN since local file missing) -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

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