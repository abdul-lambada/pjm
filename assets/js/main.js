// PROHABA JAYA MANDIRI - Main JS Responsive
// Author: Cascade AI - 2025-06-30

document.addEventListener('DOMContentLoaded', function() {
  // ======= Loader Overlay =======
  // Insert loader overlay to body
  let menuLoader = document.createElement('div');
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
  // Hide loader on page load
  window.addEventListener('pageshow', hideMenuLoader);
  window.addEventListener('DOMContentLoaded', hideMenuLoader);

  // Show loader on menu/nav click
  document.querySelectorAll('#navmenu a, .navmenu a').forEach(function(link) {
    link.addEventListener('click', function(e) {
      // Only show loader for normal links (not #, not _blank, not JS)
      const href = link.getAttribute('href');
      const target = link.getAttribute('target');
      if (
        href &&
        href !== '#' &&
        !href.startsWith('javascript:') &&
        (!target || target === '_self') &&
        !link.classList.contains('dropdown-toggle')
      ) {
        showMenuLoader();
        // Fallback: hide loader after 5s if page doesn't unload
        setTimeout(hideMenuLoader, 5000);
      }
    });
  });

  // ======= DOM Cache =======
  const body = document.body;
  const header = document.querySelector('.header');
  const navToggle = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('#navmenu');
  const scrollTopBtn = document.querySelector('.scroll-top');
  const preloader = document.getElementById('preloader');

  // ======= Sticky Header on Scroll =======
  function handleHeaderScroll() {
    if (!header) return;
    if (window.scrollY > 100) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', handleHeaderScroll);
  handleHeaderScroll();

  // ======= Mobile Nav Toggle =======
  // Mobile nav toggle (sesuai struktur header.php)
  if (navToggle && navMenu) {
    navToggle.addEventListener('click', function() {
      body.classList.toggle('mobile-nav-active');
      // Ganti ikon hamburger ke X jika aktif
      const icon = navToggle.querySelector('i');
      if (body.classList.contains('mobile-nav-active')) {
        icon.classList.remove('bi-list');
        icon.classList.add('bi-x');
      } else {
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
      }
    });
    // Tutup menu jika klik link nav (kecuali dropdown toggle)
    navMenu.addEventListener('click', function(e) {
      if (e.target.tagName === 'A' && !e.target.classList.contains('dropdown-toggle')) {
        body.classList.remove('mobile-nav-active');
        const icon = navToggle.querySelector('i');
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
      }
    });
  }

  // ======= Dropdown Nav (Desktop & Mobile) =======
  if (navMenu) {
    navMenu.querySelectorAll('.dropdown > a').forEach(function(dropLink) {
      dropLink.addEventListener('click', function(e) {
        // Only toggle on mobile
        if (window.innerWidth <= 991) {
          e.preventDefault();
          const parent = dropLink.parentElement;
          parent.classList.toggle('open');
          // Close other dropdowns
          navMenu.querySelectorAll('.dropdown').forEach(function(li) {
            if (li !== parent) li.classList.remove('open');
          });
        }
      });
    });
    // Close dropdown on outside click (mobile)
    document.addEventListener('click', function(e) {
      if (window.innerWidth <= 991 && navMenu) {
        if (!navMenu.contains(e.target)) {
          navMenu.querySelectorAll('.dropdown').forEach(li => li.classList.remove('open'));
        }
      }
    });
  }

  // ======= Scroll to Top =======
  function toggleScrollTop() {
    if (!scrollTopBtn) return;
    if (window.scrollY > 300) {
      scrollTopBtn.classList.add('active');
    } else {
      scrollTopBtn.classList.remove('active');
    }
  }
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    window.addEventListener('scroll', toggleScrollTop);
    toggleScrollTop();
  }

  // ======= Preloader =======
  if (preloader) {
    window.addEventListener('load', function() {
      setTimeout(() => {
        preloader.style.opacity = '0';
        setTimeout(() => preloader.remove(), 350);
      }, 350);
    });
  }

  // ======= Carousel Counter (Bootstrap) =======
  document.querySelectorAll('[data-carousel-counter]').forEach(function(carousel) {
    const counter = carousel.querySelector('.slide-counter');
    if (!counter) return;
    const slides = carousel.querySelectorAll('.carousel-item');
    const updateCounter = (e) => {
      let idx = 0;
      slides.forEach((el, i) => { if (el.classList.contains('active')) idx = i; });
      counter.textContent = `${idx + 1} / ${slides.length}`;
    };
    carousel.addEventListener('slid.bs.carousel', updateCounter);
    updateCounter();
  });

  // ======= Smooth Scroll for Anchor =======
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    if (anchor.getAttribute('href') === '#') return;
    anchor.addEventListener('click', function(e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
      }
    });
  });

  // ======= AOS Init (if available) =======
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 600, easing: 'ease-out-cubic', once: true });
  }
  // ======= Bootstrap Tooltip Init (if available) =======
  if (typeof bootstrap !== 'undefined') {
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(el) {
      new bootstrap.Tooltip(el);
    });
  }
});
