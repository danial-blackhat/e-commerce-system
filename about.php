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
  <title>Tentang Kami</title>
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

<body class="about-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <h1 class="sitename">BHBK</h1><span>COMPUTER</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Halaman Utama</a></li>
          <li><a href="about.php" class="active">Tentang Kami</a></li>
          <li><a href="services.php">Perkhidmatan</a></li>
          <li><a href="contact.php">Hubungi Kami</a></li>
          <li><a href="item_listing.php">Item</a></li>
          <a href="admin_login_form.php">
          <i class="fa fa-user-shield" aria-hidden="true"></i> Admin
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
 
    <div class="page-title dark-background" style="background-image: url(assets/img/about_bg.jpg);">
      <div class="container position-relative">
        <h1>Tentang Kami</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Halaman Utama</a></li>
            <li class="current">Tentang Kami</li>
          </ol>
        </nav>
      </div>
    </div> 

    
    <section id="about" class="about section">

      <div class="container">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="assets/img/about.jpg"></div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h2 class="inner-title">Inovasi teknologi untuk masa depan yang lebih baik</h2>
            <div class="our-story">
              <h4>Sejak 2006</h4>
              <h3>Tentang Kami</h3>
              <p><strong>BHBK GROUP SDN. BHD</strong>  merupakan sebuah syarikat yang dipercayai dalam industri teknologi maklumat (IT) dan berbangga dalam memberikan perkhidmatan terbaik kepada para pelanggan sejak penubuhannya pada <strong>8 Februari 2006.</strong>Syarikat ini beroperasi di No. 1, Tingkat Bawah, Persiaran Pokok Sena, Pusat Perniagaan Pokok Sena, 13200 Kepala Batas, Pulau Pinang.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Dipercayai</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Berkualiti</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Harga Berpatutan</span></li>
              </ul>
              <p>Kami merupakan pakar dalam menyediakan pelbagai penyelesaian komputer dan teknologi yang dirangka khusus bagi memenuhi keperluan pelbagai pelanggan kami.</p>
            </div>
          </div>

        </div>

      </div>

    </section> 
    <section id="stats-counter" class="stats-counter section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Statistik</h2>
        <p>Keperluan pelanggan menjadi pemangkin kepada kami untuk menyediakan perkhidmatan pembaikan komputer, komputer riba, pencetak serta menawarkan perkhidmatan rangkaian, CCTV, dan sistem akses pintu dengan pantas dan profesional.</p>
      </div> 

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="2" class="purecounter"></span>
                <p>Lebih dari 2,000 pelanggan yang berpuas hati</p> 
              </div>
            </div>
          </div> 

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="2" class="purecounter"></span>
                <p>Lebih dari 400 Projek Outside yang telah kami kendalikan di bawah Syarikat</p>
              </div>
            </div>
          </div> 

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span>
                <p>Mempunyai 15 orang pekerja termasuk HR</p>
              </div>
            </div>
          </div> 

        </div>

      </div>

    </section> 
    <section id="alt-services" class="alt-services section">

      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/barang.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Kepakaran Kami</h3>
            <p>Kami menawarkan pelbagai perkhidmatan, termasuk:</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Penjualan Komputer Peribadi dan Komputer Riba:</a></h4>
                <p>Kami menawarkan pelbagai jenama komputer peribadi dan komputer riba dengan jaminan kualiti dan prestasi yang unggul bagi memenuhi keperluan setiap pengguna.</p>
              </div>
            </div> 

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Aksesori Komputer: </a></h4>
                <p>Terdapat pelbagai pilihan aksesori dan peranti periferal komputer kami yang direka khas bagi mempertingkatkan pengalaman pengkomputeran anda.</p>
              </div>
            </div> 
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Penyelesaian Percetakan: </a></h4>
                <p>Kami menyediakan pelbagai jenis mesin pencetak dan dakwat bagi memenuhi segala keperluan percetakan anda.</p>
              </div>
            </div> 
          </div>
        </div>

      </div>

    </section> 
    

 
<section id="alt-services-2" class="alt-services section">

  <div class="container">

    <div class="row justify-content-around gy-4">
      
      
      <div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h3>Perkhidmatan Tambahan Kami</h3>
        <p>Kami turut menyediakan perkhidmatan berikut bagi melengkapi keperluan teknologi maklumat (IT) anda:</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Sistem Rangkaian dan Pendawaian:</a></h4>
            <p>Kami merancang dan melaksanakan sistem rangkaian yang teguh serta disesuaikan untuk kediaman, institusi pendidikan, dan perniagaan.</p>
          </div>
        </div> 
        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Perkhidmatan Pembaikkan dan Penyelenggaraan: </a></h4>
            <p>Juruteknik kami yang berkelayakan sentiasa bersedia untuk melaksanakan kerja-kerja pembaikan dan penyelenggaraan komputer, komputer riba, pencetak, dan sistem CCTV bagi memastikan peralatan anda berfungsi dengan optimum.</p>
          </div>
        </div> 

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Pemasangan Internet dan Sistem Tanpa Wayar:  </a></h4>
            <p>kami turut membantu anda dalam membina sambungan internet yang boleh dipercayai serta sistem tanpa wayar untuk kediaman atau pejabat anda.</p>
          </div>
        </div> 

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Penyelesaian Backup Data dan Antivirus:  </a></h4>
            <p>Melindungi data berharga anda dengan penyelesaian sandaran dan perkhidmatan antivirus yang menyeluruh.</p>
          </div>
        </div> 
      </div>

      
      <div class="features-image col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/antivirus.jpg" alt="">
      </div>

    </div>

  </div>

</section> 

     
     <section id="testimonials" class="testimonials section">

       
      <div class="container section-title" data-aos="fade-up">
        <h2>Maklum Balas</h2>
        <p>Pendapat dan Maklum Balas daripada pelanggan kami</p>
      </div> 

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/profile-1.jpg" class="testimonial-img" alt="">
                  <h3>Mohd Azam</h3>
                  <h4>Pelanggan</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Staff sini mesra dan sangat membantu, selalu ready nak tolong dengan perkhidmatan laptop. Suasana pun selesa, dan mereka bagi penjelasan yang mudah faham. Saya syorkan sangat perkhidmatan diorang untuk sesiapa yang cari sokongan laptop yang reliable</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/profile-2.jpg" class="testimonial-img" alt="">
                  <h3>Nur Amelyn</h3>
                  <h4>Pelanggan</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Harga sangat berpatutan, dengan banyak pilihan untuk laptop dan desktop. Juruteknik pun sangat membantu kalau ada masalah dengan laptop. Memang berbaloi datang sini!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/profile-3.jpg" class="testimonial-img" alt="">
                  <h3>Fikri Ahmad</h3>
                  <h4>Pelanggan</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Pekerja layan pelanggan dengan baik. Pelanggan juga diberi penjelasan tentang kerosakan yang berlaku. Memang servis yang memuaskan!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/profile-4.jpg" class="testimonial-img" alt="">
                  <h3>Ahmad Zaki</h3>
                  <h4>Pelanggan</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Servis yang sangat memuaskan di Kedai BHBK Komputer! Laptop saya yang sebelum ini tiada paparan kini berfungsi dengan baik selepas diperbaiki. Staf sangat mesra dan pantas dalam menyelesaikan masalah saya.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/profile-5_5.jpg" class="testimonial-img" alt="">
                  <h3>Mohd Faizal</h3>
                  <h4>Pelanggan</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Staf di sini sangat profesional dan tahu apa yang mereka lakukan. Saya hantar PC untuk bersihkan habuk dan pemasangan SSD baru, sekarang PC saya berjalan dengan lancar. Terima kasih BHBK Komputer!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> 

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> 
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
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
      <ul>
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
<?