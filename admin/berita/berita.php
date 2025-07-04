<?php
require_once __DIR__ . '/../includes/auth_check.php';
require_once __DIR__ . '/../../config/database.php';

// Deteksi base path dinamis universal
$script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$basePath = explode('/admin/', $script_name)[0];
if ($basePath === '') $basePath = '';

// Query data berita dari database
$berita = [];
$result = $conn->query('SELECT * FROM berita ORDER BY tanggal DESC');
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $berita[] = $row;
    }
}

ob_start();
?>
<div class="admin-content" style="padding: 0 1.5rem;">
    <div style="display:flex; justify-content:space-between; align-items:end; margin-bottom:1.2rem; gap:1rem; flex-wrap:wrap;">
        <div style="display:flex; flex-direction:column; gap:0.2rem;">
            <span style="font-size:1.25rem; font-weight:600; color:#222;">Manajemen Berita</span>
            <span style="font-size:0.98rem; color:#4e8cff; font-weight:400;">Kelola berita website Anda</span>
        </div>
        <a href="<?php echo $basePath; ?>/admin/berita/berita_tambah.php" class="btn-berita detail" style="font-size:0.98rem; font-weight:500; padding:0.5rem 1.2rem;">+ Tambah Berita</a>
    </div>
    <div class="dashboard-card" style="overflow-x:auto; padding:0; width:100%; box-sizing:border-box;">
        <table class="berita-table" style="width:100%;">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Penulis</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($berita) === 0): ?>
                <tr><td colspan="4" style="text-align:center; color:#888; font-size:1.05rem; padding:2rem 0;">Belum ada data berita.</td></tr>
                <?php else: foreach ($berita as $b): ?>
                <tr>
                    <td><?= htmlspecialchars($b['judul']) ?></td>
                    <td><?= htmlspecialchars($b['tanggal']) ?></td>
                    <td><?= isset($b['penulis']) ? htmlspecialchars($b['penulis']) : '-' ?></td>
                    <td class="aksi">
                        <a href="<?php echo $basePath; ?>/admin/berita/berita_detail.php?id=<?= $b['id'] ?>" class="btn-berita detail">Detail</a>
                        <a href="<?php echo $basePath; ?>/admin/berita/berita_edit.php?id=<?= $b['id'] ?>" class="btn-berita edit">Edit</a>
                        <a href="<?php echo $basePath; ?>/admin/berita/berita_hapus.php?id=<?= $b['id'] ?>" class="btn-berita hapus" onclick="return confirm('Yakin hapus berita ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../includes/layout.php';
?>
