// Admin Panel JavaScript

// Toggle the side navigation
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('#sidebarToggle');
    const wrapper = document.querySelector('#wrapper');
    const sidebar = document.querySelector('#sidebar');
    const toggleIcons = document.querySelectorAll('.toggle-icon');

    function toggleSidebar() {
        if (!wrapper || !document.body) return;
        
        wrapper.classList.toggle('toggled');
        document.body.classList.toggle('sidebar-toggled');
        
        // Toggle icons
        if (toggleIcons && toggleIcons.length > 0) {
            toggleIcons.forEach(icon => {
                if (icon && icon.classList) {
                    icon.classList.toggle('d-none');
                }
            });
        }
        
        // Simpan status sidebar di localStorage
        const isToggled = wrapper.classList.contains('toggled');
        localStorage.setItem('sidebarToggled', isToggled);
        
        // Update aria-expanded attribute
        if (sidebarToggle) {
            sidebarToggle.setAttribute('aria-expanded', !isToggled);
        }
    }

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function(e) {
            e.preventDefault();
            toggleSidebar();
        });
    }
    
    // Periksa lebar layar
    if (window.innerWidth < 768) {
        if (wrapper) wrapper.classList.add('toggled');
        document.body.classList.add('sidebar-toggled');
        if (toggleIcons && toggleIcons.length > 0) {
            if (toggleIcons[0]) toggleIcons[0].classList.add('d-none');
            if (toggleIcons[1]) toggleIcons[1].classList.remove('d-none');
        }
    }
    
    // Periksa status toggle dari localStorage
    const sidebarToggled = localStorage.getItem('sidebarToggled') === 'true';
    if (sidebarToggled) {
        if (wrapper) wrapper.classList.add('toggled');
        document.body.classList.add('sidebar-toggled');
        if (toggleIcons && toggleIcons.length > 0) {
            if (toggleIcons[0]) toggleIcons[0].classList.add('d-none');
            if (toggleIcons[1]) toggleIcons[1].classList.remove('d-none');
        }
    } else {
        if (wrapper) wrapper.classList.remove('toggled');
        document.body.classList.remove('sidebar-toggled');
        if (toggleIcons && toggleIcons.length > 0) {
            if (toggleIcons[0]) toggleIcons[0].classList.remove('d-none');
            if (toggleIcons[1]) toggleIcons[1].classList.add('d-none');
        }
    }
    
    // Update aria-expanded attribute
    sidebarToggle.setAttribute('aria-expanded', !wrapper.classList.contains('toggled'));
    
    // Tambahkan event listener untuk resize window
    function handleResize() {
        if (window.innerWidth < 768) {
            if (!wrapper.classList.contains('toggled')) {
                wrapper.classList.add('toggled');
                document.body.classList.add('sidebar-toggled');
                toggleIcons[0].classList.add('d-none');
                toggleIcons[1].classList.remove('d-none');
            }
        } else {
            const sidebarToggled = localStorage.getItem('sidebarToggled') === 'true';
            if (sidebarToggled) {
                wrapper.classList.add('toggled');
                document.body.classList.add('sidebar-toggled');
                toggleIcons[0].classList.add('d-none');
                toggleIcons[1].classList.remove('d-none');
            } else {
                wrapper.classList.remove('toggled');
                document.body.classList.remove('sidebar-toggled');
                toggleIcons[0].classList.remove('d-none');
                toggleIcons[1].classList.add('d-none');
            }
        }
        sidebarToggle.setAttribute('aria-expanded', !wrapper.classList.contains('toggled'));
    }
    
    // Gunakan debounce untuk menghindari terlalu banyak event pada resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(handleResize, 150);
    });
    
    // Panggil sekali di awal
    handleResize();
});

// Activate tooltips
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Activate popovers
const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});

// Initialize DataTables
$(document).ready(function() {
    if ($.fn.DataTable && $('.datatable').length) {
        $('.datatable').DataTable({
            responsive: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json'
            },
            order: [[0, 'desc']]
        });
    }
});

// Initialize Summernote
$(document).ready(function() {
    if ($.fn.summernote && $('.summernote').length) {
        $('.summernote').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null,
            focus: true,
            lang: 'id-ID',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
            callbacks: {
                onImageUpload: function(files) {
                    uploadImage(files[0], this);
                }
            }
        });
    }
});

// Handle file input preview
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    const file = input.files[0];
    const reader = new FileReader();

    reader.onloadend = function() {
        preview.src = reader.result;
        preview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '';
        preview.style.display = 'none';
    }
}

// Handle delete confirmation
function confirmDelete(event, formId) {
    event.preventDefault();
    
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    });
}

// Initialize Summernote
$(document).ready(function() {
    if (typeof $.fn.summernote !== 'undefined' && $('.summernote').length) {
        $('.summernote').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null,
            focus: true,
            lang: 'id-ID',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
            callbacks: {
                onImageUpload: function(files) {
                    uploadImage(files[0], this);
                }
            }
        });
    } else if ($('.summernote').length) {
        console.error('Summernote plugin is not loaded.');
    }
});

// Function to handle image upload for Summernote
function uploadImage(file, editor) {
    const formData = new FormData();
    formData.append('file', file);
    
    fetch('/pjm/admin/upload_image.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const image = $('<img>').attr('src', data.url);
            $(editor).summernote('insertNode', image[0]);
        } else {
            console.error('Upload gagal:', data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Toast notification
function showToast(type, message) {
    const toast = document.createElement('div');
    toast.className = `toast align-items-center text-white bg-${type} border-0`;
    toast.setAttribute('role', 'alert');
    toast.setAttribute('aria-live', 'assertive');
    toast.setAttribute('aria-atomic', 'true');
    
    toast.innerHTML = `
        <div class="d-flex">
            <div class="toast-body">
                ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    `;
    
    const toastContainer = document.querySelector('.toast-container');
    if (!toastContainer) {
        const container = document.createElement('div');
        container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
        container.style.zIndex = '11';
        document.body.appendChild(container);
        container.appendChild(toast);
    } else {
        toastContainer.appendChild(toast);
    }
    
    const bsToast = new bootstrap.Toast(toast);
    bsToast.show();
    
    toast.addEventListener('hidden.bs.toast', function () {
        toast.remove();
    });
}

// Show flash messages if they exist
const flashMessages = document.querySelectorAll('.flash-message');
flashMessages.forEach(message => {
    const type = message.dataset.type || 'info';
    showToast(type, message.textContent);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        message.remove();
    }, 5000);
});

// Handle form submission with loading state
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Memproses...';
        }
    });
});
