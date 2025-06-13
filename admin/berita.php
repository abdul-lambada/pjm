<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}
require_once '../config.php';
include '../includes/header.php';
?>
<main class="main py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold mb-0">Daftar Berita</h2>
      <a href="berita_tambah.php" class="btn btn-success"><i class="bi bi-plus-circle"></i> Tambah Berita</a>
    </div>
    <?php
    $result = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC");
    if ($result && $result->num_rows > 0):
    ?>
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead class="table-light">
          <tr>
            <th width="5%">No</th>
            <th width="20%">Judul</th>
            <th width="40%">Isi</th>
            <th width="15%">Tanggal</th>
            <th width="10%">Gambar</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1; while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['judul']); ?></td>
            <td><?= htmlspecialchars(mb_strimwidth(strip_tags($row['isi']),0,100,'...')); ?></td>
            <td><?= htmlspecialchars($row['tanggal']); ?></td>
            <td>
              <?php if ($row['gambar']): ?>
                <img src="../assets/img/berita/<?= htmlspecialchars($row['gambar']); ?>" alt="Gambar" style="max-width:60px;max-height:60px;">
              <?php endif; ?>
            </td>
            <td>
              <a href="berita_edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
              <a href="berita_hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus berita ini?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <?php else: ?>
      <div class="alert alert-warning">Belum ada berita.</div>
    <?php endif; ?>
  </div>
</main>
<?php include '../includes/footer.php'; ?>


