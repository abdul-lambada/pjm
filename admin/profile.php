<?php
require_once __DIR__ . '/includes/auth_check.php';
require_once __DIR__ . '/../config/database.php';

// Deteksi base path dinamis
$basePath = dirname($_SERVER['SCRIPT_NAME'], 2);
$basePath = preg_replace('#/admin$#', '', $basePath);
if ($basePath === DIRECTORY_SEPARATOR) $basePath = '';

// Ambil username dari session login
$session_username = $_SESSION['admin_username'] ?? null;
if (!$session_username) {
    header('Location: login.php');
    exit;
}

// Ambil data user dari database
$stmt = $conn->prepare('SELECT * FROM users WHERE username = ? LIMIT 1');
$stmt->bind_param('s', $session_username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

$title = 'Edit Profil';
$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_username = $_POST['username'] ?? $user['username'];
    $new_email = $_POST['email'] ?? $user['email'];
    $foto_path = $user['foto'];

    // Handle file upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $upload_dir = __DIR__ . '/../assets/uploads/profiles/';
        $file_extension = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
        $new_filename = 'profile_' . $user['id'] . '.' . $file_extension;
        $target_file = $upload_dir . $new_filename;
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array(strtolower($file_extension), $allowed_types)) {
            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
                $foto_path = $basePath . '/assets/uploads/profiles/' . $new_filename;
            } else {
                $message = 'Gagal mengunggah file.';
                $message_type = 'danger';
            }
        } else {
            $message = 'Format file tidak valid. Hanya JPG, JPEG, PNG, & GIF yang diizinkan.';
            $message_type = 'danger';
        }
    }

    // Update data user di database
    if ($message === '') {
        $stmt = $conn->prepare('UPDATE users SET username=?, email=?, foto=? WHERE id=?');
        $stmt->bind_param('sssi', $new_username, $new_email, $foto_path, $user['id']);
        if ($stmt->execute()) {
            $message = 'Profil berhasil diperbarui.';
            $message_type = 'success';
            // Update session jika username berubah
            $_SESSION['admin_username'] = $new_username;
        } else {
            $message = 'Gagal memperbarui profil.';
            $message_type = 'danger';
        }
        $stmt->close();
        // Refresh data user
        $stmt = $conn->prepare('SELECT * FROM users WHERE id = ? LIMIT 1');
        $stmt->bind_param('i', $user['id']);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
    }
}

$admin_username = $user['username'] ?? 'Admin';
$admin_email = $user['email'] ?? 'admin@example.com';
$admin_avatar = $user['foto'] ?? $basePath . '/assets/img/default-avatar.png';

ob_start();
?>
<div class="admin-content">
    <div class="dashboard-welcome" style="margin-bottom:2rem;">
        <h1>Edit Profil</h1>
        <p>Perbarui data akun admin Anda di sini.</p>
    </div>
    <?php if ($message): ?>
        <div class="dashboard-card" style="background:#eaf6ff; color:#222; margin-bottom:1.5rem;">
            <?= $message ?>
        </div>
    <?php endif; ?>
    <div class="dashboard-card" style="max-width:600px; margin:auto;">
        <form method="POST" enctype="multipart/form-data" class="profile-form" autocomplete="off">
            <div style="display:flex; flex-wrap:wrap; gap:2rem; align-items:center; justify-content:center;">
                <div style="flex:0 0 150px; text-align:center;">
                    <img src="<?= htmlspecialchars($admin_avatar) ?>" alt="Foto Profil" class="profile-avatar" style="width:120px; height:120px; object-fit:cover; border-radius:50%; border:3px solid #4e8cff; background:#fff; margin-bottom:1rem;" onerror="this.onerror=null;this.src='<?php echo $basePath; ?>/assets/img/default-avatar.png';">
                    <div style="margin-top:0.5rem;">
                        <label for="profile_picture" style="font-size:0.95rem; color:#555;">Ubah Foto Profil</label><br>
                        <input type="file" id="profile_picture" name="profile_picture" accept="image/*" style="margin-top:0.3rem;">
                    </div>
                </div>
                <div style="flex:1 1 220px;">
                    <div style="margin-bottom:1rem;">
                        <label for="username" style="font-weight:500;">Username</label><br>
                        <input type="text" id="username" name="username" value="<?= htmlspecialchars($admin_username) ?>" required style="width:80%; padding:0.6rem 1rem; border-radius:6px; border:1px solid #cfd8dc; margin-top:0.2rem;">
                    </div>
                    <div style="margin-bottom:1rem;">
                        <label for="email" style="font-weight:500;">Email</label><br>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($admin_email) ?>" required style="width:80%; padding:0.6rem 1rem; border-radius:6px; border:1px solid #cfd8dc; margin-top:0.2rem;">
                    </div>
                    <div style="display:flex; justify-content:flex-end; gap:1rem;">
                        <a href="<?php echo $basePath; ?>/admin/dashboard.php" class="dashboard-card" style="background:#cfd8dc; color:#222; padding:0.6rem 1.5rem; border-radius:6px; text-decoration:none; font-weight:500;">Batal</a>
                        <button type="submit" class="dashboard-card" style="background:#4e8cff; color:#fff; padding:0.6rem 1.5rem; border:none; border-radius:6px; font-weight:500; cursor:pointer;">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/includes/layout.php';
