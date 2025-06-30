<?php

/**
 * Head Include
 * Contains all meta tags, CSS links, and other head elements
 */
?>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<?php
// Judul dinamis: gunakan $page_title jika ada
$sitename = isset($page_title) ? $page_title : 'Prohaba Jaya Mandiri';
?>
<title><?= htmlspecialchars($sitename) ?></title>
<meta name="description" content="<?php echo $pageDescription ?? ''; ?>">
<meta name="keywords" content="">

<!-- Favicons -->
<link href="/pjm/assets/img/title.png" rel="icon">
<link href="/pjm/assets/img/title.png" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="/pjm/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/pjm/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="/pjm/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="/pjm/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="/pjm/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<!-- Main CSS File -->
<link href="/pjm/assets/css/main.css" rel="stylesheet">