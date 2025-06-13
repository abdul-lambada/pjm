<?php
require_once __DIR__ . '/includes/auth_check.php';

$title = 'Edit Profil';
$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update username and email
    if (isset($_POST['username'])) {
        $_SESSION['admin_username'] = htmlspecialchars($_POST['username']);
    }
    if (isset($_POST['email'])) {
        $_SESSION['admin_email'] = htmlspecialchars($_POST['email']);
    }

    // Handle file upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $upload_dir = __DIR__ . '/../assets/uploads/profiles/';
        $file_extension = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
        // Create a unique filename to avoid conflicts
        $new_filename = 'profile_' . session_id() . '.' . $file_extension;
        $target_file = $upload_dir . $new_filename;

        // Validate file type
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array(strtolower($file_extension), $allowed_types)) {
            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
                // Store the web-accessible path in the session
                $_SESSION['admin_avatar'] = '/pjm/assets/uploads/profiles/' . $new_filename;
                $message = 'Profil berhasil diperbarui.';
                $message_type = 'success';
            } else {
                $message = 'Gagal mengunggah file.';
                $message_type = 'danger';
            }
        } else {
            $message = 'Format file tidak valid. Hanya JPG, JPEG, PNG, & GIF yang diizinkan.';
            $message_type = 'danger';
        }
    } else {
        $message = 'Profil berhasil diperbarui.';
        $message_type = 'success';
    }
}

// Get current admin data from session
$admin_username = $_SESSION['admin_username'] ?? 'Admin';
$admin_email = $_SESSION['admin_email'] ?? 'admin@example.com';
$admin_avatar = $_SESSION['admin_avatar'] ?? '/pjm/assets/img/default-avatar.png'; // Default avatar

ob_start();
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Edit Profil</h3>

                    <?php if ($message): ?>
                        <div class="alert alert-<?= $message_type ?>" role="alert">
                            <?= $message ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="<?= htmlspecialchars($admin_avatar) ?>" alt="Foto Profil" class="img-thumbnail rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;" onerror="this.onerror=null;this.src='/pjm/assets/img/default-avatar.png';">
                                <div class="mb-3">
                                    <label for="profile_picture" class="form-label">Ubah Foto Profil</label>
                                    <input class="form-control form-control-sm" type="file" id="profile_picture" name="profile_picture">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($admin_username) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($admin_email) ?>" required>
                                </div>
                                <hr>
                                <p class="text-muted small">Kosongkan jika tidak ingin mengubah password.</p>
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-end">
                            <a href="dashboard.php" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i>Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/includes/layout.php';
