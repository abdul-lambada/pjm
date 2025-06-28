/* =============================================================
   PROHABA JAYA MANDIRI – Optimized Script
   Author: Tim Pengembang – 2025-06-28
   Description: Optimized JavaScript for better performance
   =============================================================*/

document.addEventListener('DOMContentLoaded', function() {
  'use strict';

  // Cache DOM elements
  const body = document.body;
  const header = document.querySelector('.header');
  const navToggle = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('#navmenu');
  const scrollTopBtn = document.querySelector('.scroll-top');
  const preloader = document.getElementById('preloader');
  
  // Helper function to select elements
  const $ = (selector, all = false) => 
    all ? document.querySelectorAll(selector) : document.querySelector(selector);
  
  // Header scroll effect
  function handleScroll() {
    if (window.scrollY > 100) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  
  // Mobile menu toggle
  function toggleMobileMenu() {
    body.classList.toggle('mobile-nav-active');
    navToggle.classList.toggle('bi-list');
    navToggle.classList.toggle('bi-x');
  }
  
  // Close mobile menu when clicking a link
  function closeMobileMenu(e) {
    if (e.target.matches('#navmenu a')) {
      body.classList.remove('mobile-nav-active');
      navToggle.classList.remove('bi-x');
      navToggle.classList.add('bi-list');
    }
  }
  
  // Scroll to top
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  
  // Toggle scroll to top button
  function toggleScrollTop() {
    if (window.scrollY > 300) {
      scrollTopBtn.classList.add('active');
    } else {
      scrollTopBtn.classList.remove('active');
    }
  }
  
  // Initialize AOS if available
  function initAOS() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-out-cubic',
        once: true
      });
    }
  }
  
  // Initialize carousel counters
  function initCarouselCounters() {
    const carousels = document.querySelectorAll('[data-carousel-counter]');
    
    carousels.forEach(carousel => {
      const counter = carousel.querySelector('.slide-counter');
      if (!counter) return;
      
      const totalSlides = carousel.querySelectorAll('.carousel-item').length;
      
      const updateCounter = (e) => {
        const activeSlide = e?.to || Array.from(carousel.querySelectorAll('.carousel-item')).findIndex(el => el.classList.contains('active'));
        counter.textContent = `${activeSlide + 1} / ${totalSlides}`;
      };
      
      carousel.addEventListener('slid.bs.carousel', updateCounter);
      updateCounter(); // Initial update
    });
  }
  
  // Smooth scroll for anchor links
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      if (anchor.getAttribute('href') === '#') return;
      
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
  }
  
  // Initialize tooltips if Bootstrap is available
  function initTooltips() {
    if (typeof bootstrap !== 'undefined') {
      const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    }
  }
  
  // Initialize all functions
  function init() {
    // Event listeners
    if (navToggle) navToggle.addEventListener('click', toggleMobileMenu);
    if (navMenu) navMenu.addEventListener('click', closeMobileMenu);
    if (scrollTopBtn) scrollTopBtn.addEventListener('click', scrollToTop);
    
    // Scroll events
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('scroll', toggleScrollTop);
    
    // Initialize components
    initAOS();
    initCarouselCounters();
    initSmoothScroll();
    initTooltips();
    
    // Initial states
    handleScroll();
    toggleScrollTop();
    
    // Remove preloader
    if (preloader) {
      window.addEventListener('load', function() {
        setTimeout(() => {
          preloader.style.opacity = '0';
          setTimeout(() => preloader.remove(), 300);
        }, 300);
      });
    }
  }
  
  // Start initialization
  init();
});
