<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?= htmlspecialchars($title) ?> | PJM</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/pjm/assets/img/favicon.ico" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Custom Admin CSS -->
    <link href="/pjm/admin/assets/css/admin-style.css" rel="stylesheet">
    
    <!-- Dashboard CSS -->
    <?php if (basename($_SERVER['PHP_SELF']) === 'dashboard.php'): ?>
    <link href="/pjm/admin/assets/css/dashboard.css" rel="stylesheet">
    <?php endif; ?>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs5.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs5.min.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="/pjm/admin/assets/js/charts.js"></script>
    <script src="/pjm/admin/assets/js/admin.js"></script>
    
    <?php if (function_exists('pageScripts')) pageScripts(); ?>
</head>

<body class="bg-light">
    <!-- Page Wrapper -->
    <div id="wrapper" class="d-flex">
        <!-- Sidebar -->
        <?php include __DIR__.'/sidebar.php'; ?>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column flex-grow-1">
            <!-- Topbar -->
            <?php include __DIR__.'/navbar.php'; ?>
            
            <!-- Main Content -->
            <div id="content" class="flex-grow-1">
                <!-- Begin Page Content -->
                <div class="container-fluid py-4">
                    <?= $content ?? '' ?>
                </div>
                <!-- /.container-fluid -->
                
                <!-- Footer -->
                <footer class="footer bg-white py-3">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright &copy; PJM <?= date('Y') ?></div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Custom scripts -->
    <script>
    // Toggle the side navigation
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggle = document.body.querySelector('#sidebarToggle');
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function(e) {
                e.preventDefault();
                document.body.classList.toggle('sidebar-toggled');
                const sidebar = document.querySelector('.sidebar');
                if (sidebar) sidebar.classList.toggle('toggled');
                
                const sidebarCollapse = document.querySelector('.sidebar .collapse');
                if (sidebarCollapse) {
                    sidebarCollapse.classList.remove('show');
                }
            });
        }
        
        // Close any open menu accordions when window is resized below 768px
        function handleResize() {
            if (window.innerWidth < 768) {
                document.querySelectorAll('.sidebar .collapse').forEach(collapse => {
                    collapse.classList.remove('show');
                });
            }
            
            // Toggle the side navigation when window is resized below 480px
            const sidebar = document.querySelector('.sidebar');
            if (sidebar && window.innerWidth < 480 && !sidebar.classList.contains('toggled')) {
                document.body.classList.add('sidebar-toggled');
                sidebar.classList.add('toggled');
            }
        }
        
        window.addEventListener('resize', handleResize);
        
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Initialize DataTables if table exists
        if (typeof $.fn.DataTable === 'function' && document.querySelector('.datatable')) {
            $('.datatable').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json'
                }
            });
        }
    });
    </script>
</body>
</html>
