// PROHABA JAYA MANDIRI - Main JS Responsive & Modern

document.addEventListener('DOMContentLoaded', function () {
  // ========== LOADER & PRELOADER ==========
  const menuLoader = document.createElement('div');
  menuLoader.className = 'menu-loader';
  menuLoader.style.display = 'none';
  menuLoader.innerHTML = '<div class="spinner"></div>';
  document.body.appendChild(menuLoader);

  function showMenuLoader() {
    menuLoader.style.display = 'flex';
    menuLoader.style.opacity = '1';
  }
  function hideMenuLoader() {
    menuLoader.style.opacity = '0';
    setTimeout(() => { menuLoader.style.display = 'none'; }, 300);
  }
  window.addEventListener('pageshow', hideMenuLoader);
  window.addEventListener('DOMContentLoaded', hideMenuLoader);

  // Loader on internal nav link
  document.querySelectorAll('.navbar-nav a, .navmenu a').forEach(link => {
    link.addEventListener('click', function (e) {
      const href = link.getAttribute('href');
      const target = link.getAttribute('target');
      const isInternal = href && href !== '#' && !href.startsWith('javascript:') && (!target || target === '_blank');
      if (isInternal && !link.classList.contains('dropdown-toggle')) {
        showMenuLoader();
        setTimeout(hideMenuLoader, 3000);
      }
    });
  });

  // ========== BOOTSTRAP NAVBAR INTERAKTIF ==========
  // Dropdown hover on desktop
  document.querySelectorAll('.navbar .dropdown').forEach(function (dropdown) {
    dropdown.addEventListener('mouseenter', function () {
      if (window.innerWidth > 991) {
        const menu = dropdown.querySelector('.dropdown-menu');
        if (menu) menu.classList.add('show');
      }
    });
    dropdown.addEventListener('mouseleave', function () {
      if (window.innerWidth > 991) {
        const menu = dropdown.querySelector('.dropdown-menu');
        if (menu) menu.classList.remove('show');
      }
    });
    // (HAPUS) Tidak ada event click custom untuk mobile/tablet
  });

  // Dropdown animasi masuk Bootstrap
  const dropdowns = document.querySelectorAll('.navbar .dropdown');
  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector('.dropdown-toggle');
    const menu = dropdown.querySelector('.dropdown-menu');
    if (toggle && menu) {
      toggle.addEventListener('show.bs.dropdown', function () {
        menu.classList.add('animate__animated', 'animate__fadeInDown');
      });
      toggle.addEventListener('hide.bs.dropdown', function () {
        menu.classList.remove('animate__animated', 'animate__fadeInDown');
      });
    }
  });

  // Close navbar collapse on link click (mobile)
  document.querySelectorAll('.navbar-nav .nav-link').forEach(function (link) {
    link.addEventListener('click', function () {
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (window.innerWidth <= 991 && navbarCollapse && navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });

  // ========== CAROUSEL KLIEN ANIMASI ==========
  const clientsCarousel = document.getElementById('clientsCarousel');
  if (clientsCarousel) {
    clientsCarousel.addEventListener('slide.bs.carousel', function (e) {
      const next = e.relatedTarget;
      if (next) {
        next.querySelectorAll('.animate__animated').forEach(function (el) {
          el.classList.remove('animate__fadeInUp');
          void el.offsetWidth; // trigger reflow
          el.classList.add('animate__fadeInUp');
        });
      }
    });
  }

  // ========== GALLERY FILTER FUNCTIONALITY ==========
  const filterButtons = document.querySelectorAll('[data-filter]');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  if (filterButtons.length > 0 && portfolioItems.length > 0) {
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        const filter = this.getAttribute('data-filter');
        
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        this.classList.add('active');
        
        // Filter portfolio items with animation
        portfolioItems.forEach((item, index) => {
          const category = item.getAttribute('data-category');
          
          if (filter === 'all' || category === filter) {
            // Show item with staggered animation
            setTimeout(() => {
              item.style.display = 'block';
              item.classList.add('animate__animated', 'animate__fadeIn');
              item.classList.remove('hidden');
              item.classList.add('visible');
            }, index * 100); // Stagger animation by 100ms per item
          } else {
            // Hide item
            item.classList.remove('animate__animated', 'animate__fadeIn', 'visible');
            item.classList.add('hidden');
            setTimeout(() => {
              if (item.classList.contains('hidden')) {
                item.style.display = 'none';
              }
            }, 300);
          }
        });
      });
    });
  }

  // ========== Bootstrap Tooltip ==========
  if (typeof bootstrap !== 'undefined') {
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
      new bootstrap.Tooltip(el);
    });
  }

  // ========== AOS (Animation on Scroll) ==========
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 600,
      easing: 'ease-out-cubic',
      once: true
    });
  }

  // ========== GLIGHTBOX INITIALIZATION ==========
  if (typeof GLightbox !== 'undefined') {
    const lightbox = GLightbox({
      selector: '.glightbox',
      touchNavigation: true,
      loop: true,
      autoplayVideos: true
    });
  }

  // Hapus event JS custom untuk dropdown navbar, biarkan Bootstrap native yang handle
  document.querySelectorAll('.navbar .dropdown-toggle').forEach(function(toggle) {
    toggle.onclick = null;
  });
});
