-- Membuat database
CREATE DATABASE IF NOT EXISTS pjm_db;
USE pjm_db;

-- Tabel Kategori Proyek
CREATE TABLE IF NOT EXISTS kategori_proyek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Proyek
CREATE TABLE IF NOT EXISTS proyek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_proyek VARCHAR(20) NOT NULL UNIQUE,
    kategori_id INT,
    nama_proyek VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    deskripsi_singkat VARCHAR(255),
    deskripsi_lengkap TEXT,
    lokasi TEXT NOT NULL,
    tanggal_mulai DATE,
    tanggal_selesai DATE,
    durasi_proyek VARCHAR(100),
    status ENUM('belum_dimulai', 'dalam_proses', 'selesai', 'tertunda', 'dibatalkan') DEFAULT 'belum_dimulai',
    gambar_utama VARCHAR(255),
    thumbnail VARCHAR(255),
    klien VARCHAR(255),
    nilai_proyek DECIMAL(15,2),
    luas_area VARCHAR(100),
    jenis_kontrak VARCHAR(100),
    highlight TINYINT(1) DEFAULT 0,
    fitur_unggulan TEXT,
    tags VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kategori_id) REFERENCES kategori_proyek(id) ON DELETE SET NULL
);

-- Tabel Gambar Proyek
CREATE TABLE IF NOT EXISTS proyek_gambar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proyek_id INT NOT NULL,
    judul VARCHAR(255),
    gambar VARCHAR(255) NOT NULL,
    urutan INT DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proyek_id) REFERENCES proyek(id) ON DELETE CASCADE
);

-- Tabel Galeri
CREATE TABLE IF NOT EXISTS galeri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    gambar VARCHAR(255) NOT NULL,
    thumbnail VARCHAR(255),
    kategori ENUM('proyek', 'kantor', 'tim', 'lainnya') DEFAULT 'proyek',
    urutan INT DEFAULT 0,
    highlight TINYINT(1) DEFAULT 0,
    tanggal_upload DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif',
    tags VARCHAR(255),
    meta_data TEXT
);

-- Tabel Berita
CREATE TABLE IF NOT EXISTS berita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    isi TEXT NOT NULL,
    gambar VARCHAR(255),
    excerpt TEXT,
    penulis VARCHAR(100),
    tanggal_publikasi DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('draft', 'published', 'archived') DEFAULT 'draft',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel Lowongan Kerja
CREATE TABLE IF NOT EXISTS lowongan_kerja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    posisi VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    departemen VARCHAR(100),
    deskripsi_singkat VARCHAR(255),
    deskripsi_pekerjaan TEXT NOT NULL,
    persyaratan TEXT,
    tanggung_jawab TEXT,
    pengalaman VARCHAR(100),
    pendidikan VARCHAR(100),
    gaji_min DECIMAL(15,2),
    gaji_max DECIMAL(15,2),
    lokasi VARCHAR(255),
    icon VARCHAR(100),
    warna_card VARCHAR(30) DEFAULT '#f8f9fa',
    jenis_pekerjaan ENUM('full_time', 'part_time', 'contract', 'freelance') DEFAULT 'full_time',
    status ENUM('buka', 'tutup') DEFAULT 'buka',
    tanggal_posting DATETIME DEFAULT CURRENT_TIMESTAMP,
    tanggal_tutup DATE,
    highlight TINYINT(1) DEFAULT 0,
    jumlah_posisi INT DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel Kontak Pesan
CREATE TABLE IF NOT EXISTS kontak_pesan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subjek VARCHAR(255),
    pesan TEXT NOT NULL,
    status ENUM('baru', 'dibaca', 'dibalas') DEFAULT 'baru',
    tanggal_kirim DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Users (khusus admin)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    no_telepon VARCHAR(20),
    foto VARCHAR(255),
    role ENUM('admin') DEFAULT 'admin', -- hanya admin
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif',
    last_login DATETIME,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel Company Profile (untuk beranda)
CREATE TABLE IF NOT EXISTS company_profile (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_perusahaan VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    alamat VARCHAR(255),
    email VARCHAR(255),
    telepon VARCHAR(50),
    website VARCHAR(255),
    logo VARCHAR(255),
    visi TEXT,
    misi TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel Galeri
CREATE TABLE IF NOT EXISTS galeri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    gambar VARCHAR(255) NOT NULL,
    tanggal_upload DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel Proyek
CREATE TABLE IF NOT EXISTS proyek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_proyek VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    lokasi VARCHAR(255),
    tanggal_mulai DATE,
    tanggal_selesai DATE,
    status ENUM('berjalan', 'selesai', 'batal') DEFAULT 'berjalan',
    kategori_id INT,
    gambar VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kategori_id) REFERENCES kategori_proyek(id)
);

-- Tabel Lowongan Kerja
CREATE TABLE IF NOT EXISTS lowongan_kerja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    posisi VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    kualifikasi TEXT,
    lokasi VARCHAR(255),
    tanggal_posting DATE DEFAULT CURRENT_DATE,
    tanggal_berakhir DATE,
    status ENUM('aktif', 'tutup') DEFAULT 'aktif',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel Setting Website
CREATE TABLE IF NOT EXISTS settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(100) NOT NULL UNIQUE,
    setting_value TEXT,
    setting_description VARCHAR(255),
    setting_group VARCHAR(100) DEFAULT 'general',
    is_active TINYINT(1) DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert data default untuk admin
INSERT INTO users (username, password, nama_lengkap, email, role) 
VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator', 'admin@example.com', 'admin');

-- Insert kategori proyek default
INSERT INTO kategori_proyek (nama_kategori, deskripsi) VALUES
('Bangunan Komersial', 'Proyek pembangunan gedung komersial seperti mall, hotel, dan perkantoran'),
('Infrastruktur', 'Proyek infrastruktur seperti jalan, jembatan, dan bendungan'),
('Perumahan', 'Proyek perumahan dan apartemen'),
('Industri', 'Proyek bangunan industri dan pabrik');

-- Insert layanan default
INSERT INTO layanan (nama_layanan, deskripsi, icon, urutan) VALUES
('Konstruksi Bangunan', 'Layanan konstruksi bangunan komersial dan residensial', 'fas fa-building', 1),
('Renovasi', 'Layanan renovasi dan perbaikan bangunan', 'fas fa-hammer', 2),
('Desain & Perencanaan', 'Layanan desain dan perencanaan konstruksi', 'fas fa-drafting-compass', 3),
('Manajemen Proyek', 'Layanan manajemen dan pengawasan proyek konstruksi', 'fas fa-tasks', 4);

-- Insert pengaturan website default
INSERT INTO settings (setting_key, setting_value, setting_description, setting_group) VALUES
('site_title', 'Prohaba Jaya Mandiri', 'Judul website', 'general'),
('site_description', 'Perusahaan konstruksi terpercaya di Indonesia', 'Deskripsi singkat website', 'general'),
('contact_email', 'info@prohabajayamandiri.com', 'Email kontak utama', 'contact'),
('contact_phone', '+62-21-12345678', 'Nomor telepon kontak utama', 'contact'),
('contact_address', 'Jl. Contoh No. 123, Jakarta, Indonesia', 'Alamat kantor', 'contact'),
('social_facebook', 'https://facebook.com/prohabajayamandiri', 'Link Facebook', 'social'),
('social_instagram', 'https://instagram.com/prohabajayamandiri', 'Link Instagram', 'social'),
('footer_text', '© 2025 Prohaba Jaya Mandiri. All Rights Reserved.', 'Teks footer website', 'general');

-- Menambahkan indeks untuk optimasi
CREATE INDEX idx_galeri_status ON galeri(status);
CREATE INDEX idx_proyek_status ON proyek(status);
CREATE INDEX idx_proyek_kategori ON proyek(kategori_id);
CREATE INDEX idx_proyek_tanggal ON proyek(tanggal_mulai, tanggal_selesai);
CREATE INDEX idx_lowongan_status ON lowongan_kerja(status);
CREATE INDEX idx_lowongan_tanggal ON lowongan_kerja(tanggal_posting, tanggal_tutup);
CREATE INDEX idx_proyek_status ON proyek(status);
CREATE INDEX idx_proyek_kategori ON proyek(kategori_id);
CREATE INDEX idx_proyek_tanggal ON proyek(tanggal_mulai, tanggal_selesai);
CREATE INDEX idx_galeri_status ON galeri(status);
CREATE INDEX idx_kontak_status ON kontak_pesan(status);
CREATE INDEX idx_settings_group ON settings(setting_group);
