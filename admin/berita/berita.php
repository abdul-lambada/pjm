<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}

// Include konfigurasi database
require_once __DIR__ . '/../../config.php';

// Mulai output buffering
ob_start();

// Periksa koneksi database
if (!isset($conn) || $conn->connect_error) {
    die("Koneksi database gagal: " . ($conn->connect_error ?? 'Tidak dapat membuat koneksi'));
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Berita</h1>
        <a href="berita_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Berita Baru
        </a>
    </div>

    <?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION['success'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php unset($_SESSION['success']); endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $_SESSION['error'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php unset($_SESSION['error']); endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
            <div class="d-flex">
                <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Cari berita...">
                <button class="btn btn-sm btn-outline-secondary" type="button" id="refreshTable" data-toggle="tooltip" title="Segarkan">
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $result = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC");
                if ($result && $result->num_rows > 0):
                ?>
                <table class="table table-bordered table-hover datatable" width="100%" cellspacing="0">
                    <thead class="bg-light">
                        <tr>
                            <th width="5%">No</th>
                            <th>Judul</th>
                            <th width="15%">Tanggal</th>
                            <th width="15%" class="text-center">Gambar</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td>
                                <div class="font-weight-bold"><?= htmlspecialchars($row['judul']); ?></div>
                                <small class="text-muted"><?= htmlspecialchars(mb_strimwidth(strip_tags($row['isi']),0,100,'...')); ?></small>
                            </td>
                            <td><?= date('d M Y', strtotime($row['tanggal'])); ?></td>
                            <td class="text-center">
                                <?php 
                                $gambar_path = '/pjm/assets/img/berita/' . htmlspecialchars($row['gambar']);
                                $gambar_full_path = $_SERVER['DOCUMENT_ROOT'] . '/pjm/assets/img/berita/' . $row['gambar'];
                                if (!empty($row['gambar']) && file_exists($gambar_full_path)): 
                                ?>
                                    <img src="<?= $gambar_path ?>" 
                                         alt="Gambar Berita" 
                                         class="img-thumbnail" 
                                         style="max-width: 80px; max-height: 60px; object-fit: cover;"
                                         onerror="this.onerror=null; this.src='/pjm/assets/img/no-image.jpg';">
                                <?php else: ?>
                                    <img src="/pjm/assets/img/no-image.jpg" 
                                         alt="Tidak ada gambar" 
                                         class="img-thumbnail" 
                                         style="max-width: 80px; max-height: 60px; object-fit: cover;">
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="berita_edit.php?id=<?= $row['id']; ?>" 
                                       class="btn btn-sm btn-primary" 
                                       data-toggle="tooltip" 
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn btn-sm btn-danger delete-btn" 
                                            data-id="<?= $row['id']; ?>"
                                            data-title="<?= htmlspecialchars($row['judul']); ?>"
                                            data-toggle="tooltip" 
                                            title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="../berita/berita_detail.php?id=<?= $row['id']; ?>" 
                                       target="_blank"
                                       class="btn btn-sm btn-info text-white"
                                       data-toggle="tooltip" 
                                       title="Lihat">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <?php else: ?>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i> Belum ada data berita. Silakan tambahkan berita baru.
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus berita <strong id="beritaTitle"></strong>?</p>
                <p class="text-danger">Tindakan ini tidak dapat dibatalkan!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="#" id="confirmDelete">
                    <i class="fas fa-trash-alt mr-1"></i> Hapus
                </a>
            </div>
        </div>
    </div>
</div>

<?php
// Ambil konten dari buffer dan simpan ke variabel $content
$content = ob_get_clean();

// Set judul halaman
$title = 'Kelola Berita';

// Include layout
require_once '../includes/layout.php';
?>

<?php
// Script khusus halaman berita
function pageScripts() {
    ?>
    <script>
    $(document).ready(function() {
        // Inisialisasi tooltip
        $('[data-toggle="tooltip"]').tooltip();
        
        // Inisialisasi DataTable
        if ($.fn.DataTable.isDataTable('.datatable')) {
            $('.datatable').DataTable().destroy();
        }
        
        var table = $('.datatable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
            "columnDefs": [
                { "orderable": false, "targets": [0, 3, 4] },
                { "searchable": false, "targets": [0, 3, 4] }
            ],
            "order": [[2, 'desc']], // Urutkan berdasarkan kolom tanggal (indeks 2) secara descending
            "responsive": true,
            "pageLength": 10,
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Semua"]]
        });
        
        // Fungsi pencarian
        $('#searchInput').on('keyup', function() {
            table.search(this.value).draw();
        });
        
        // Tombol refresh
        $('#refreshTable').on('click', function() {
            table.ajax.reload(null, false);
            var $icon = $(this).find('i');
            $icon.addClass('fa-spin');
            setTimeout(function() {
                $icon.removeClass('fa-spin');
            }, 1000);
        });
        
        // Handle delete button click
        $('.delete-btn').on('click', function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            $('#beritaTitle').text('"' + title + '"');
            $('#confirmDelete').attr('href', 'berita_hapus.php?id=' + id);
            $('#deleteModal').modal('show');
        });
    });
    </script>
    <?php
}
?>
