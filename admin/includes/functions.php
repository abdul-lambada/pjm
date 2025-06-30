<?php
// ==========================================================
// Helper utilities (URL builder & active menu detector)
// ==========================================================
if (!function_exists('getMenuUrl')) {
    /**
     * Buat URL aman berbasis root aplikasi.
     * @param string $path  Path absolut (mulai dari /) atau relatif.
     * @return string       HTML-safe URL.
     */
    function getMenuUrl(string $path): string {
        $path = '/' . ltrim($path, '/');
        return htmlspecialchars($path, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('isActiveMenu')) {
    /**
     * Cek apakah $menu_path ada di path request saat ini.
     * Digunakan untuk menandai menu aktif.
     * @param string      $menu_path
     * @param string|null $current_path  Jika null akan memakai $_SERVER['PHP_SELF'].
     */
    function isActiveMenu(string $menu_path, ?string $current_path = null): bool {
        $current_path   = $current_path ?? ($_SERVER['PHP_SELF'] ?? '');
        $normalized_cur = str_replace('\\', '/', strtolower($current_path));
        $normalized_menu = str_replace('\\', '/', strtolower($menu_path));
        return strpos($normalized_cur, $normalized_menu) !== false;
    }
}

// ==========================================================
// Existing helper / data functions below
// ==========================================================
// Fungsi untuk mendapatkan total proyek
if (!function_exists('getTotalProjects')) {
    function getTotalProjects() {
        global $conn;
        $tableCheck = $conn->query("SHOW TABLES LIKE 'projects'");
        if ($tableCheck->num_rows == 0) return 0;
        $query = "SELECT COUNT(*) as total FROM projects WHERE deleted_at IS NULL";
        $result = $conn->query($query);
        return $result ? $result->fetch_assoc()['total'] : 0;
    }
}

// Fungsi untuk mendapatkan total berita
if (!function_exists('getTotalNews')) {
    function getTotalNews() {
        global $conn;
        $tableCheck = $conn->query("SHOW TABLES LIKE 'news'");
        if ($tableCheck->num_rows == 0) return 0;
        $query = "SELECT COUNT(*) as total FROM news WHERE deleted_at IS NULL";
        $result = $conn->query($query);
        return $result ? $result->fetch_assoc()['total'] : 0;
    }
}

// Fungsi untuk mendapatkan total galeri
if (!function_exists('getTotalGallery')) {
    function getTotalGallery() {
        global $conn;
        $tableCheck = $conn->query("SHOW TABLES LIKE 'gallery'");
        if ($tableCheck->num_rows == 0) return 0;
        $query = "SELECT COUNT(*) as total FROM gallery WHERE deleted_at IS NULL";
        $result = $conn->query($query);
        return $result ? $result->fetch_assoc()['total'] : 0;
    }
}

// Fungsi untuk mendapatkan total admin
if (!function_exists('getTotalAdmins')) {
    function getTotalAdmins() {
        global $conn;
        $tableCheck = $conn->query("SHOW TABLES LIKE 'users'");
        if ($tableCheck->num_rows == 0) return 0;
        $query = "SELECT COUNT(*) as total FROM users WHERE role = 'admin' AND deleted_at IS NULL";
        $result = $conn->query($query);
        return $result ? $result->fetch_assoc()['total'] : 0;
    }
}

// Fungsi untuk mendapatkan data statistik
function getStatsData($period = 'month') {
    global $conn;
    $stats = [
        'labels' => [],
        'data' => []
    ];
    
    // Contoh data dummy untuk grafik
    // Di sini Anda bisa menambahkan query sesuai dengan kebutuhan
    if ($period === 'month') {
        $stats['labels'] = ['1 Jun', '2 Jun', '3 Jun', '4 Jun', '5 Jun', '6 Jun'];
        $stats['data'] = [0, 10, 5, 2, 20, 30];
    } elseif ($period === 'week') {
        $stats['labels'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $stats['data'] = [10, 20, 15, 25, 22, 30, 18];
    } else {
        $stats['labels'] = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'];
        $stats['data'] = [28, 48, 40, 19, 86, 27];
    }
    
    return $stats;
}

// Fungsi untuk memformat tanggal
function formatDate($date, $format = 'd M Y') {
    if (empty($date) || $date == '0000-00-00') {
        return '-';
    }
    $date = new DateTime($date);
    return $date->format($format);
}

// Fungsi untuk memotong teks
function truncate($text, $length = 100, $append = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }
    return substr($text, 0, $length) . $append;
}

// Fungsi untuk redirect
function redirect($url) {
    header("Location: $url");
    exit();
}

// Fungsi untuk menampilkan pesan flash
function setFlash($type, $message) {
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}

// Fungsi untuk mengecek apakah ada pesan flash
function hasFlash() {
    return isset($_SESSION['flash']);
}

// Fungsi untuk mendapatkan pesan flash
function getFlash() {
    if (hasFlash()) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

// Fungsi untuk menampilkan notifikasi
function displayAlert() {
    $flash = getFlash();
    if ($flash) {
        $type = $flash['type'];
        $message = $flash['message'];
        echo "<div class='alert alert-{$type} alert-dismissible fade show' role='alert'>";
        echo htmlspecialchars($message);
        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        echo "</div>";
    }
}

// Fungsi untuk membersihkan input
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Fungsi untuk mengunggah file
function uploadFile($file, $target_dir, $allowed_types = ['jpg', 'jpeg', 'png', 'gif']) {
    $target_file = $target_dir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Cek apakah file adalah gambar asli atau bukan
    $check = getimagesize($file["tmp_name"]);
    if ($check === false) {
        return ['success' => false, 'message' => 'File yang diunggah bukan gambar.'];
    }
    
    // Cek ukuran file (maksimal 5MB)
    if ($file["size"] > 5000000) {
        return ['success' => false, 'message' => 'Ukuran file terlalu besar. Maksimal 5MB.'];
    }
    
    // Cek tipe file
    if (!in_array($imageFileType, $allowed_types)) {
        return ['success' => false, 'message' => 'Hanya file JPG, JPEG, PNG & GIF yang diizinkan.'];
    }
    
    // Buat nama file unik
    $new_filename = uniqid() . '.' . $imageFileType;
    $target_path = $target_dir . $new_filename;
    
    // Coba unggah file
    if (move_uploaded_file($file["tmp_name"], $target_path)) {
        return [
            'success' => true, 
            'filename' => $new_filename,
            'path' => $target_path
        ];
    } else {
        return ['success' => false, 'message' => 'Terjadi kesalahan saat mengunggah file.'];
    }
}

// Fungsi untuk menghapus file
function deleteFile($file_path) {
    if (file_exists($file_path) && is_file($file_path)) {
        return unlink($file_path);
    }
    return false;
}
