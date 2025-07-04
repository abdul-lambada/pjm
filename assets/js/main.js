// PROHABA JAYA MANDIRI - Main JS Responsive

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
    setTimeout(() => {
      menuLoader.style.display = 'none';
    }, 300);
  }

  // Auto-hide loader on page show or DOM ready
  window.addEventListener('pageshow', hideMenuLoader);
  window.addEventListener('DOMContentLoaded', hideMenuLoader);

  // Trigger loader on internal link click (except dropdown-toggle, external, or #)
  document.querySelectorAll('#navmenu a, .navmenu a').forEach(link => {
    link.addEventListener('click', function (e) {
      const href = link.getAttribute('href');
      const target = link.getAttribute('target');
      const isInternal = href && href !== '#' && !href.startsWith('javascript:') && (!target || target === '_self');
      if (isInternal && !link.classList.contains('dropdown-toggle')) {
        showMenuLoader();
        setTimeout(hideMenuLoader, 5000);
      }
    });
  });

  const preloader = document.getElementById('preloader');
  if (preloader) {
    window.addEventListener('load', function () {
      setTimeout(() => {
        preloader.style.opacity = '0';
        setTimeout(() => preloader.remove(), 350);
      }, 350);
    });
  }

  // ========== HEADER RESPONSIVE ==========
  const navToggle = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('.navmenu');
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

  if (navToggle && navMenu) {
    navToggle.addEventListener('click', function () {
      navMenu.classList.toggle('active');
      const icon = navToggle.querySelector('i');
      if (icon) {
        icon.classList.toggle('bi-list', !navMenu.classList.contains('active'));
        icon.classList.toggle('bi-x', navMenu.classList.contains('active'));
      }
    });

    // Klik di luar navmenu akan menutup nav (hanya di mobile)
    document.addEventListener('click', function (e) {
      const isMobile = window.innerWidth <= 991;
      const clickedOutside = !navMenu.contains(e.target) && !navToggle.contains(e.target);
      if (isMobile && navMenu.classList.contains('active') && clickedOutside) {
        navMenu.classList.remove('active');
        const icon = navToggle.querySelector('i');
        if (icon) {
          icon.classList.add('bi-list');
          icon.classList.remove('bi-x');
        }
      }
    });

    // Tutup menu saat klik link dalam navmenu (kecuali dropdown-toggle)
    navMenu.addEventListener('click', function (e) {
      if (e.target.tagName === 'A' && !e.target.classList.contains('dropdown-toggle') && window.innerWidth <= 991) {
        navMenu.classList.remove('active');
        const icon = navToggle.querySelector('i');
        if (icon) {
          icon.classList.add('bi-list');
          icon.classList.remove('bi-x');
        }
      }
    });
  }

  // Responsive Navbar Toggle & Dropdown

  document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.querySelector('.mobile-nav-toggle');
    const navMenu = document.getElementById('navmenu');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    // Hamburger menu
    if (navToggle && navMenu) {
      navToggle.addEventListener('click', function () {
        navMenu.classList.toggle('active');
      });
    }

    // Close nav on link click (mobile only)
    document.querySelectorAll('.nav-list a').forEach(function(link) {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 991.98) {
          navMenu.classList.remove('active');
        }
      });
    });

    // Dropdown for mobile
    dropdownToggles.forEach(function(toggle) {
      toggle.addEventListener('click', function(e) {
        if (window.innerWidth <= 991.98) {
          e.preventDefault();
          const parent = toggle.parentElement;
          parent.classList.toggle('open');
          // Close other dropdowns
          document.querySelectorAll('.dropdown').forEach(function(drop) {
            if (drop !== parent) drop.classList.remove('open');
          });
        }
      });
    });

    // Close navmenu on resize if desktop
    window.addEventListener('resize', function() {
      if (window.innerWidth > 991.98) {
        navMenu.classList.remove('active');
        document.querySelectorAll('.dropdown').forEach(function(drop) {
          drop.classList.remove('open');
        });
      }
    });
  });

  // ========== AOS (Animation on Scroll) ==========
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 600,
      easing: 'ease-out-cubic',
      once: true
    });
  }

  // ========== Bootstrap Tooltip ==========
  if (typeof bootstrap !== 'undefined') {
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
      new bootstrap.Tooltip(el);
    });
  }
});
