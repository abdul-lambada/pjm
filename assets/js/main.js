/* =============================================================
   PROHABA JAYA MANDIRI – Global Script
   Author: Cascade AI – 2025-06-17
   Description: Modern, interactive & responsive enhancements.
   ==============================================================*/

(() => {
  "use strict";

  /*==============================
  Helpers
  ==============================*/
  const body = document.body;
  const select = (el, all = false) => all ? [...document.querySelectorAll(el)] : document.querySelector(el);
  const on = (type, el, listener, all = false) => {
    const elements = select(el, all);
    if (elements) {
      all ? elements.forEach(e => e.addEventListener(type, listener)) : elements.addEventListener(type, listener);
    }
  };

  /*==============================
  Header shadow on scroll
  ==============================*/
  const header = select(".header, #header");
  const setHeaderShadow = () => {
    if (!header) return;
    window.scrollY > 100 ? body.classList.add("scrolled") : body.classList.remove("scrolled");
  };
  window.addEventListener("load", setHeaderShadow);
  document.addEventListener("scroll", setHeaderShadow);

  /*==============================
  Mobile nav toggle
  ==============================*/
  const navToggle = select(".mobile-nav-toggle");
  on("click", ".mobile-nav-toggle", () => {
    body.classList.toggle("mobile-nav-active");
    navToggle.classList.toggle("bi-list");
    navToggle.classList.toggle("bi-x");
  });

  /* Close mobile nav when a link is clicked */
  on("click", "#navmenu a", () => {
    if (body.classList.contains("mobile-nav-active")) {
      body.classList.remove("mobile-nav-active");
      navToggle.classList.toggle("bi-list");
      navToggle.classList.toggle("bi-x");
    }
  }, true);

  /*==============================
  Scroll-top button
  ==============================*/
  const scrollTopBtn = select(".scroll-top");
  const toggleScrollTop = () => {
    if (!scrollTopBtn) return;
    scrollTopBtn.classList.toggle("active", window.scrollY > 200);
  };
  window.addEventListener("load", toggleScrollTop);
  document.addEventListener("scroll", toggleScrollTop);
  on("click", ".scroll-top", e => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  /*==============================
  AOS init or graceful fallback
  ==============================*/
  const initAOS = () => {
    if (typeof AOS !== "undefined") {
      AOS.init({ duration: 600, easing: "ease-out-cubic", once: true });
    } else {
      // Lightweight fade-up fallback
      const els = select("[data-aos]", true);
      const io = new IntersectionObserver(entries => {
        entries.forEach(ent => {
          if (ent.isIntersecting) {
            ent.target.classList.add("aos-animate");
            io.unobserve(ent.target);
          }
        });
      }, { threshold: 0.2 });
      els.forEach(el => io.observe(el));
    }
  };
  window.addEventListener("load", initAOS);

  /*==============================
  Bootstrap tooltips
  ==============================*/
  if (typeof bootstrap !== "undefined") {
    select('[data-bs-toggle="tooltip"]', true).forEach(el => new bootstrap.Tooltip(el));
  }

  /*==============================
  PureCounter re-initialisation (if present)
  ==============================*/
  if (typeof PureCounter !== "undefined") {
    new PureCounter();
  }

  /*==============================
  Swiper initialisation for any .init-swiper elements
  ==============================*/
  const initSwipers = () => {
    if (typeof Swiper === "undefined") return;
    select(".init-swiper", true).forEach(swiperEl => {
      const configEl = swiperEl.querySelector(".swiper-config");
      if (!configEl) return;
      const config = JSON.parse(configEl.textContent.trim());
      new Swiper(swiperEl, config);
    });
  };
  window.addEventListener("load", initSwipers);

  /*==============================
  Activate nav links on scroll (simple scrollspy)
  ==============================*/
  const sections = select("section[id]", true);
  const navLinks = select("#navmenu a[href^='#']", true);
  const activateNav = () => {
    const pos = window.scrollY + 200;
    sections.forEach(sec => {
      if (pos >= sec.offsetTop && pos <= sec.offsetTop + sec.offsetHeight) {
        navLinks.forEach(l => l.classList.remove("active"));
        const link = select(`#navmenu a[href='#${sec.id}']`);
        if (link) link.classList.add("active");
      }
    });
  };
  window.addEventListener("scroll", activateNav);

  /*==============================
  Hero slide counter
  ==============================*/
  const heroCarousel = select('#heroCarousel');
  if (heroCarousel && typeof bootstrap !== 'undefined') {
    const totalSlides = heroCarousel.querySelectorAll('.carousel-item').length;
    const counterEl   = heroCarousel.querySelector('.slide-counter');
    const updateCounter = (e) => {
      const idx = e.to !== undefined ? e.to : 0;
      if (counterEl) counterEl.textContent = `${idx + 1} / ${totalSlides}`;
    };
    heroCarousel.addEventListener('slid.bs.carousel', updateCounter);
    // Set initial count after load
    window.addEventListener('load', () => updateCounter({ to: heroCarousel.querySelector('.carousel-item.active')?.dataset.bsSlideTo || 0 }));
  }

  /*==============================
  jQuery Preloader FadeOut
  ==============================*/
  if (typeof window.jQuery !== "undefined") {
    jQuery(window).on('load', function () {
      jQuery('#preloader').fadeOut(400, function () { jQuery(this).remove(); });
    });
  }
})();
