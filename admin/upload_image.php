<?php
// Pastikan hanya akses melalui POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Cek apakah file diunggah
if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'No file uploaded or upload error']);
    exit;
}

// Validasi tipe file
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
$fileType = mime_content_type($_FILES['file']['tmp_name']);

if (!in_array($fileType, $allowedTypes)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Hanya file gambar yang diizinkan (JPEG, PNG, GIF, WebP)']);
    exit;
}

// Batas ukuran file (5MB)
$maxFileSize = 5 * 1024 * 1024; // 5MB
if ($_FILES['file']['size'] > $maxFileSize) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Ukuran file terlalu besar. Maksimal 5MB']);
    exit;
}

// Buat direktori uploads jika belum ada
$uploadDir = __DIR__ . '/uploads/';
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Generate nama file unik
$fileName = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9_\.]/', '_', basename($_FILES['file']['name']));
$targetPath = $uploadDir . $fileName;

// Pindahkan file ke direktori uploads
if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
    // Kembalikan URL lengkap ke file yang diunggah
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    $fileUrl = $baseUrl . '/pjm/admin/uploads/' . $fileName;
    
    echo json_encode([
        'success' => true,
        'url' => $fileUrl
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Gagal mengunggah file']);
}
