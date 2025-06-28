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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);
    $tanggal = date('Y-m-d H:i:s'); // current datetime
    
    // Handle gambar upload
    $gambar = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "../assets/img/galeri/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $gambar = basename($_FILES['gambar']['name']);
        $targetFile = $targetDir . $gambar;
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
        
        // Check if there was no error and try to upload
        if (empty($error)) {
            if (!move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
                $error = "Maaf, terjadi kesalahan saat mengupload file.";
            }
        }
    } else {
        $error = "Gambar wajib diunggah.";
    }
    
    if (empty($error)) {
        // Insert into database
        $query = "INSERT INTO galeri (judul, deskripsi, gambar, tanggal) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, 'ssss', $judul, $deskripsi, $gambar, $tanggal);
        
        if (mysqli_stmt_execute($stmt)) {
            $success = "Galeri berhasil ditambahkan.";
        } else {
            $error = "Terjadi kesalahan: " . mysqli_error($koneksi);
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<div class="container">
    <h1 class="mt-4">Tambah Galeri</h1>
    
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    
    <?php if (!empty($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
        <a href="galeri.php" class="btn btn-secondary">Kembali ke Daftar Galeri</a>
    <?php else: ?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="galeri.php" class="btn btn-secondary">Batal</a>
        </form>
    <?php endif; ?>
</div>

<?php
require_once '../includes/footer.php';
?>
