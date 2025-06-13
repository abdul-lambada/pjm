<?php
$page_title = 'Layanan';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/'],
    ['name' => 'Layanan', 'url' => null]
];
ob_start();
?>

<section id="services" class="services section">
    <div class="container">
        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <i class="bi bi-building icon"></i>
                    <h3>Konstruksi Bangunan</h3>
                    <p>Menyediakan layanan konstruksi untuk gedung perkantoran, perumahan, fasilitas komersial, dan bangunan industri dengan standar kualitas tertinggi.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative">
                    <i class="bi bi-road icon"></i>
                    <h3>Konstruksi Jalan & Infrastruktur</h3>
                    <p>Spesialis dalam pembangunan dan pemeliharaan jalan raya, jalan tol, jembatan, serta infrastruktur pendukung lainnya untuk konektivitas yang lebih baik.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative">
                    <i class="bi bi-lightning-charge icon"></i>
                    <h3>Infrastruktur Listrik</h3>
                    <p>Pembangunan gardu induk, jaringan transmisi, dan distribusi listrik untuk mendukung kebutuhan energi perumahan, komersial, dan industri.</p>
                </div>
            </div><!-- End Service Item -->

        </div>
    </div>
</section><!-- /Services Section -->

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>
