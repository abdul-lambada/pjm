// Admin Dashboard JS
document.addEventListener('DOMContentLoaded', function() {
    // Toggle Sidebar
    var sidebarToggle = document.getElementById('sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            console.log('Toggle clicked');
            var sidebar = document.getElementById('sidebar');
            if (sidebar) {
                sidebar.classList.toggle('d-none');
            }
        });
    }

    // Highlight Active Menu
    const currentPage = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });
});
