<?php
require_once '../config.php';
require_once '../includes/header.php';

// Periksa sesi admin
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login.php');
    exit;
}

$error = '';
$success = '';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch existing data
$query = "SELECT * FROM galeri WHERE id = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$row) {
    $error = "Galeri tidak ditemukan.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);
    
    // Handle gambar upload
    $gambar = $row['gambar']; // default to existing image
    $gambarChanged = false;
    
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "../assets/img/galeri/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $newGambar = basename($_FILES['gambar']['name']);
        $targetFile = $targetDir . $newGambar;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        // Check if image file is a actual image
        $check = getimagesize($_FILES['gambar']['tmp_name']);
        if ($check === false) {
            $error = "File is not an image.";
        }
        
        // Check file size (max 2MB)
        if ($_FILES['gambar']['size'] > 2000000) {
            $error = "Ukuran file terlalu besar. Maksimal 2MB.";
        }
        
        // Allow certain file formats
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedTypes)) {
            $error = "Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
        }
        
        if (empty($error)) {
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
                // Delete old image if it's not the same and exists
                if ($gambar && $gambar != $newGambar && file_exists($targetDir . $gambar)) {
                    unlink($targetDir . $gambar);
                }
                $gambar = $newGambar;
                $gambarChanged = true;
            } else {
                $error = "Maaf, terjadi kesalahan saat mengupload file.";
            }
        }
    }
    
    if (empty($error)) {
        // Update database
        $query = "UPDATE galeri SET judul = ?, deskripsi = ?, gambar = ? WHERE id = ?";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, 'sssi', $judul, $deskripsi, $gambar, $id);
        
        if (mysqli_stmt_execute($stmt)) {
            $success = "Galeri berhasil diperbarui.";
        } else {
            $error = "Terjadi kesalahan: " . mysqli_error($koneksi);
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<div class="container">
    <h1 class="mt-4">Edit Galeri</h1>
    
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    
    <?php if (!empty($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
        <a href="galeri.php" class="btn btn-secondary">Kembali ke Daftar Galeri</a>
    <?php elseif ($row): ?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= htmlspecialchars($row['judul']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= htmlspecialchars($row['deskripsi']) ?></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                <div class="mt-2">
                    <img src="../assets/img/galeri/<?= $row['gambar'] ?>" width="150">
                    <p>Gambar saat ini: <?= $row['gambar'] ?></p>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="galeri.php" class="btn btn-secondary">Batal</a>
        </form>
    <?php else: ?>
        <div class="alert alert-danger">Galeri tidak ditemukan.</div>
        <a href="galeri.php" class="btn btn-secondary">Kembali ke Daftar Galeri</a>
    <?php endif; ?>
</div>

<?php
require_once '../includes/footer.php';
?>
