<?php
require_once '../config.php';
require_once '../includes/header.php';

// Periksa sesi admin
if (!isset($_SESSION['admin_logged_in']) {
    header('Location: ../login.php');
    exit;
}

// Query untuk mendapatkan data galeri
$query = "SELECT * FROM galeri ORDER BY tanggal DESC";
$result = mysqli_query($koneksi, $query);
?>

<div class="container">
    <h1 class="mt-4">Manajemen Galeri</h1>
    <a href="galeri_tambah.php" class="btn btn-primary mb-3">Tambah Galeri</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td><img src="../assets/img/galeri/<?= $row['gambar'] ?>" width="100"></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td>
                            <a href="galeri_edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="galeri_hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once '../includes/footer.php';
?>
