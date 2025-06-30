// Interaktifitas form kontak: validasi, loading, error, sukses, dan auto-clear

document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.php-email-form');
  if (!form) return;

  const loading = form.querySelector('.loading');
  const errorMsg = form.querySelector('.error-message');
  const sentMsg = form.querySelector('.sent-message');

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    loading.style.display = 'block';
    errorMsg.style.display = 'none';
    sentMsg.style.display = 'none';

    // Simple client-side validation
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const subject = form.subject.value.trim();
    const message = form.message.value.trim();
    if (!name || !email || !subject || !message) {
      loading.style.display = 'none';
      errorMsg.textContent = 'Semua field wajib diisi.';
      errorMsg.style.display = 'block';
      return;
    }
    // Email format validation
    if (!/^\S+@\S+\.\S+$/.test(email)) {
      loading.style.display = 'none';
      errorMsg.textContent = 'Format email tidak valid.';
      errorMsg.style.display = 'block';
      return;
    }

    // Simulasi AJAX (ganti ke fetch jika backend siap)
    setTimeout(function() {
      loading.style.display = 'none';
      sentMsg.style.display = 'block';
      form.reset();
      setTimeout(function() {
        sentMsg.style.display = 'none';
      }, 4000);
    }, 1200);
  });

  // Animasi input focus
  form.querySelectorAll('input, textarea').forEach(function(el) {
    el.addEventListener('focus', function() {
      el.classList.add('border-primary', 'shadow-sm');
    });
    el.addEventListener('blur', function() {
      el.classList.remove('border-primary', 'shadow-sm');
    });
  });
});
