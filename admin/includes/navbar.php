<?php
require_once __DIR__ . '/../../config/database.php';
// Deteksi base path dinamis universal
$script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$basePath = explode('/admin/', $script_name)[0];
if ($basePath === '') $basePath = '';

$session_username = $_SESSION['admin_username'] ?? null;
$profileImg = $basePath . '/assets/img/default-avatar.png';
if ($session_username) {
    $stmt = $conn->prepare('SELECT foto FROM users WHERE username = ? LIMIT 1');
    $stmt->bind_param('s', $session_username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        if (!empty($row['foto'])) {
            // Cek file benar-benar ada
            $imgPath = $_SERVER['DOCUMENT_ROOT'] . $row['foto'];
            if (file_exists($imgPath)) {
                $profileImg = $row['foto'];
            }
        }
    }
    $stmt->close();
}
?>
<nav class="admin-navbar">
    <div class="navbar-left">
        <span class="navbar-logo">PJManager</span>
        <span class="navbar-title">Admin Panel</span>
    </div>
    <div class="navbar-right">
        <div class="navbar-profile">
            <img src="<?php echo htmlspecialchars($profileImg); ?>" alt="Profile" class="profile-avatar" style="width:36px; height:36px; border-radius:50%; object-fit:cover; border:2px solid #fff; background:#fff;" onclick="toggleProfileDropdown()" onerror="this.onerror=null;this.src='<?php echo $basePath; ?>/assets/img/default-avatar.png';">
            <div class="profile-dropdown" id="profileDropdown">
                <a href="<?php echo $basePath; ?>/admin/profile.php">Profile</a>
                <a href="<?php echo $basePath; ?>/admin/logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>
