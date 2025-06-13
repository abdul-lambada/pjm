<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}
require_once '../config.php';
include '../includes/header.php';

// Handle submit
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul']);
    $isi = trim($_POST['isi']);
    $tanggal = date('Y-m-d');
    $gambar = '';
    // Upload gambar jika ada
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($ext, $allowed)) {
            $filename = uniqid('berita_').'.'.$ext;
            $target = '../assets/img/berita/'.$filename;
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
                $gambar = $filename;
            } else {
                $message = '<div class="alert alert-danger">Gagal upload gambar.</div>';
            }
        } else {
            $message = '<div class="alert alert-danger">Format gambar tidak didukung.</div>';
        }
    }
    if ($judul && $isi && !$message) {
        $stmt = $conn->prepare("INSERT INTO berita (judul, isi, tanggal, gambar) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $judul, $isi, $tanggal, $gambar);
        if ($stmt->execute()) {
            $message = '<div class="alert alert-success">Berita berhasil ditambahkan.</div>';
        } else {
            $message = '<div class="alert alert-danger">Gagal menambah berita.</div>';
        }
        $stmt->close();
    } elseif (!$message) {
        $message = '<div class="alert alert-danger">Judul dan isi wajib diisi.</div>';
    }
}
?>
<main class="main py-5">
  <div class="container">
    <h2 class="fw-bold mb-4">Tambah Berita</h2>
    <?= $message; ?>
    <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm">
      <div class="mb-3">
        <label for="judul" class="form-label">Judul Berita</label>
        <input type="text" class="form-control" id="judul" name="judul" required>
      </div>
      <div class="mb-3">
        <label for="isi" class="form-label">Isi Berita</label>
        <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
      </div>
      <div class="mb-3">
        <label for="gambar" class="form-label">Gambar (opsional)</label>
        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="berita.php" class="btn btn-secondary ms-2">Kembali</a>
    </form>
  </div>
</main>
<?php include '../includes/footer.php'; ?>


