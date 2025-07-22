<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BHBK Computer</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="assets/img/bhbk_logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
         
        <h1 class="sitename">BHBK</h1><span>COMPUTER</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Halaman Utama</a></li>
          <li><a href="about.php">Tentang Kami</a></li>
          <li><a href="services.php">Perkhidmatan</a></li>
          <li><a href="contact.php" class="active">Hubungi Kami</a></li>
          <li><a href="item_listing.php">Item</a></li>
          <a href="admin_login_form.php">
          <i class="fa fa-user-shield" aria-hidden="true"></i> Admin
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

     
    <div class="page-title dark-background" style="background-image: url(assets/img/contact_bg.jpg);">
      <div class="container position-relative">
        <h1>Hubungi Kami</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Halaman Utama</a></li>
            <li class="current">Hubungi Kami</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>NO 1,TINGKAT BAWAH PERSIARAN POKOK SENA,</p>
              <p> PUSAT PERNIAGAAN POKOK SENA,13220,</p>
              <p>KEPALA BATAS(S.P.U),PULAU PINANG</p>
              <p></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Hubungi Kami</h3>
              <p>010-4454658/04-5732998</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>E-mail kami</h3>
              <p>bhbk_enterprise@yahoo.com</p>
            </div>
          </div>

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63544.45590239524!2d100.41594663385942!3d5.488224989760758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ad014f6ef3371%3A0x4aad4515a8486a8!2sBHBK%20COMPUTER!5e0!3m2!1sen!2smy!4v1729584086117!5m2!1sen!2smy" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      </div>

    </section>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">BHBK Komputer</span>
          </a>
          <div class="footer-contact pt-3">
            <p>NO 1,TINGKAT BAWAH PERSIARAN POKOK SENA,</p>
            <p> PUSAT PERNIAGAAN POKOK SENA,13220,</p>
            <p>KEPALA BATAS(S.P.U),PULAU PINANG</p>
            <p class="mt-3"><strong>Phone:</strong> <span>010-4454658/04-5732998</span></p>
            <p><strong>Email:</strong> <span>bhbk_enterprise@yahoo.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/bhbkcomputer/"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/bhbkcomputer_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <ul>
            <li><a href="index.php">Halaman Utama</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li><a href="services.php">Perkhidmatan</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BHBK COMPUTER</strong> <span>All Rights Reserved</span></p><br>
    </div>

  </footer>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>