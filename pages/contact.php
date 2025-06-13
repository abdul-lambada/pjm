<?php
$page_title = 'Kontak';
$breadcrumb = [
    ['name' => 'Beranda', 'url' => '/pjm/'],
    ['name' => 'Kontak', 'url' => null]
];
ob_start();
?>

<section id="contact" class="contact section">

    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8981774552035!2d116.87109037408045!3d-1.2305437355658728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1476c262ff2b3%3A0xbc5d2649ad924717!2sPT.%20Prohaba%20Jaya%20Mandiri!5e0!3m2!1sid!2sid!4v1746518920421!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Alamat</h3>
                        <p>JL. MT Haryono Komp. Ruko Tamansari Bukit Mutiara (WIKA) Blok A1. No. 09 RT.16, Gunung Samarinda Baru, Balikpapan Utara, Kalimantan Timur</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Telepon</h3>
                        <p>0542-873295</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email</h3>
                        <p>administration@prohabajayagroup.co.id</p>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class="col-lg-8">
                <form action="/pjm/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                        </div>
                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                            <button type="submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section>

<?php
$main_content = ob_get_clean();
include_once __DIR__ . '/../templates/public_template.php';
?>
