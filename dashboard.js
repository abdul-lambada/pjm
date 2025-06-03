document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const submenuToggles = document.querySelectorAll('.submenu-toggle');

    // Toggle Sidebar Functionality
    sidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('open'); // Untuk mobile
        sidebar.classList.toggle('collapsed'); // Untuk desktop
    });

    // Submenu Toggle Functionality
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah link pindah halaman
            const parentLi = this.parentElement;
            parentLi.classList.toggle('open');
        });
    });

    // Close sidebar if clicked outside on mobile (optional, but good UX)
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768 && !sidebar.contains(e.target) && !sidebarToggle.contains(e.target) && sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
        }
    });

    // Handle initial sidebar state based on screen size (for desktop view)
    if (window.innerWidth > 768) {
        // You can set default behavior here, e.g., sidebar always open on desktop
        // sidebar.classList.remove('collapsed'); // Or keep it collapsed by default
    }
});