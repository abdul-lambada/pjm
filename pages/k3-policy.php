<?php 
$page_title = 'K3 Policy';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/'],
    ['name' => 'K3 Policy', 'url' => null]
];
ob_start();
?>

<section id="courses" class="courses section">

  <div class="container">
    <h3 style="text-align: center;"><strong>Kebijakan Keselamatan dan Kesehatan Kerja</strong></h3>
    <br>
    <div class="desc">
        <h6 style="line-height: 1.5; text-align: justify;"><strong>PT. PROHABA JAYA MANDIRI</strong> sebagai perusahaan yang bergerak di bidang General Contractor & Supplier, bertekad untuk memberikan kepuasan pelanggan setinggi-tingginya tanpa mengabaikan aspek kesehatan, keselamatan kerja dan kelestarian lingkungan melalui komitmen sebagai berikut:</h6>
        <ol type="1">
            <li style="text-align: justify">Menciptakan budaya perusahaan yang mengutamakan kesehatan, keselamatan kerja, kelestarian lingkungan, kemandirian, ketangguhan, dan pencapaian kualitas yang optimal sesuai dengan keinginan pelanggan, peraturan perundang-undangan atau ketentuan lain yang berlaku.</li>
            <li style="text-align: justify">Aktif dalam menjaga kelestarian lingkungan dengan mensinergikan pemanfaatan sumber daya alam budaya dan mengendalikan dampak lingkungan yang mungkin timbul sebagai akibat dari kegiatan, produk, dan jasa perusahaan.</li>
            <li style="text-align: justify">Mengkomunikasikan kebijakan ini kepada seluruh karyawan atau pihak-pihak yang berkepentingan agar setiap karyawan menyadari kewajibannya terhadap kualitas, kesehatan dan keselamatan kerja, serta kelestarian lingkungan.</li>
            <li style="text-align: justify">Meninjau kembali kebijakan ini secara berkala untuk meninjau relevansi dan kesesuaiannya dengan perubahan yang dialami perusahaan.</li>
        </ol>
        <h6 style="line-height: 1.5; text-align: justify;">Sebagai sarana untuk mewujudkan kebijakan, perusahaan menerapkan dan mengintegrasikan Sistem Manajemen Mutu ISO 9001:2015 dan Sistem Manajemen Keselamatan dan Kesehatan Kerja ISO 45001:2018 serta Sistem Manajemen Lingkungan ISO 14001:2015 dan secara berkesinambungan terus meningkatkan kinerjanya.</h6>
    </div>
</div>
<p></p>
<div class="wrapper4" style="display: flex; flex-wrap: wrap; justify-content: space-around;">
    <div style="flex: 1 0 30%; margin-bottom: 20px; min-width: 250px;">
        <h5 style="color: black; text-align: center">
            Struktur P2K3
        </h5>
        <br>
        <br>
        <img src="/pjm/assets/img/Struktur P2K3.drawio.png" width="100%" height="auto" alt="Struktur P2K3 Prohaba Jaya Mandiri">
    </div>

    <div style="flex: 1 0 30%; margin-bottom: 20px; min-width: 250px;">
        <h5 style="color: black; text-align: center">
            Struktur Sistem Manajemen, Kesehatan & Keselamatan Kerja dan Lingkungan
        </h5>
        <br>
        <img src="/pjm/assets/img/Struktur Sistem Manajemen, Kesehatan & Keselamatan Kerja dan Lingkungan.drawio.png" width="100%" height="auto" alt="Struktur Sistem Manajemen, Kesehatan & Keselamatan Kerja dan Lingkungan">
    </div>

    <div style="flex: 1 0 30%; margin-bottom: 20px; min-width: 250px;">
        <h5 style="color: black; text-align: center">
            Struktur Komite Sistem Manajemen Lingkungan
        </h5>
        <br>
        <img src="/pjm/assets/img/Struktur Komite Sistem Manajemen Lingkungan.drawio.png" width="100%" height="auto" alt="Struktur Komite Sistem Manajemen Lingkungan">
    </div>
</div>
<br>
<img src="/pjm/assets/img/sertifikasi.png" style="width: 50%; height: auto; display: block; margin: 0 auto;">

</section><!-- /Courses Section -->

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>

