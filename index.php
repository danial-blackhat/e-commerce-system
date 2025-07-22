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
<html lang="en"></html>

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

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        
        <h1 class="sitename">BHBK</h1><span>COMPUTER</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Halaman Utama</a></li>
          <li><a href="about.php">Tentang Kami</a></li>
          <li><a href="services.php">Perkhidmatan</a></li>
          <li><a href="contact.php">Hubungi Kami</a></li>
          <li><a href="item_listing.php">Item</a></li>
          <a href="admin_login_form.php" target="_blank">
          <i class="fa fa-user-shield" aria-hidden="true"></i> Admin
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section dark-background">
      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>Selamat Datang ke BHBK Computer</h2>
              <p>Di BHBK COMPUTER, kami adalah pakar dalam menyediakan perkhidmatan yang boleh dipercayai dan berpatutan bagi komputer, komputer riba, sistem CCTV, dan pencetak anda. Sama ada anda memerlukan pembaikan, penyelenggaraan, atau peningkatan, juruteknik kami yang berpengalaman sentiasa bersedia untuk memberikan penyelesaian yang pantas dan cekap. Dengan komitmen terhadap kualiti dan kepuasan pelanggan, kami memastikan peranti anda beroperasi dengan lancar dalam tempoh masa yang singkat. Percayakan kami untuk memenuhi semua keperluan servis teknologi anda</p>
              <a href="#get-started" class="btn-get-started">Selanjutnya</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/Gambar_1.jpg" alt="">
        </div>

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/Gambar_2.jpeg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/Gambar_3.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/Gambar_4.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/Gambar_5.jpg" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section>
    <section id="get-started" class="get-started section">

      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="content">
              <h3>Kami tidak pernah mengabaikan keperluan teknologi anda. BHBK COMPUTER sentiasa sedia membantu.</h3>
              <p>Di BHBK COMPUTER, kepuasan pelanggan adalah keutamaan kami. Juruteknik kami yang berpengalaman akan menyelesaikan segala masalah, dari pembaikan hingga pemasangan, bagi memastikan peranti anda berfungsi dengan lancar</p>
              <p>Kami memahami betapa pentingnya teknologi yang boleh diharap, dan kami komited untuk menyediakan penyelesaian terbaik bagi memenuhi keperluan komputer dan rangkaian anda</p>
            </div>
          </div>

          

        </div>

      </div>

    </section>
    <section id="constructions" class="constructions section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Perkhidmatan di Lokasi</h2>
        <p>Di BHBK Komputer, kami sedia membantu anda dalam menyelesaikan segala masalah teknologi. Dengan perkhidmatan yang cepat dan mesra, kami akan memastikan bahawa peranti anda sentiasa berfungsi dengan baik</p>
      </div>
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/on_site_1.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Networking</h4>
                    <p>BHBK Komputer menawarkan perkhidmatan rangkaian di lokasi, termasuk penyelesaian masalah internet, konfigurasi sistem pelayan, dan pengaturan perkongsian fail serta pencetak</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/fariz_on_site.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Desktop Repairing</h4>
                    <p>BHBK Komputer akan datang ke lokasi anda untuk membaiki komputer, tidak mengira sama ada masalah prestasi perlahan atau tiada kuasa, kami akan memastikan komputer anda berfungsi dengan baik</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/on_site_3.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Laptop Repairing</h4>
                    <p>BHBK Komputer menawarkan perkhidmatan pembaikan komputer riba di lokasi anda. Dari masalah skrin retak hingga isu-isu lain, kami akan datang untuk memastikan komputer riba anda berfungsi seperti biasa</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/on_site_4.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">CCTV</h4>
                    <p>Kami sedia membantu dalam pembaikan sistem CCTV di lokasi anda. Sekiranya terdapat masalah dengan sistem keselamatan, kami akan segera datang untuk menyelesaikan segala isu yang timbul</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <section id="projects" class="projects section">

     
      <div class="container section-title" data-aos="fade-up">
        <h2>Kerja di Tapak</h2>
        <p>Pasukan juruteknik kami akan turun ke lokasi untuk melaksanakan kerja secara terus dan memastikan kesemua masalah dapat diselesaikan dengan cepat tanpa perlu menunggu lama</p>
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-computer">Penyelenggaraan Services</li>
            <li data-filter=".filter-projector">Penyelenggaraan Projektor</li>
            <li data-filter=".filter-network">Penyelenggaraan Network</li>
            <li data-filter=".filter-printer">Penyelenggaraan Printer</li>
            <li data-filter=".filter-delivery">Perkhidmatan Penghantaran Barang</li>
          </ul> 

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-computer">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pc-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pejabat</h4>
                  <p>Juruteknik hadir untuk membaiki kabel suis on/off pada komputer (PC)</p>
                  <a href="assets/img/projects/pc-1.jpg" title="Di Pejabat" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div> 

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-projector">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/projector-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Sekolah Kerajaan</h4>
                  <p>Juruteknik hadir untuk memeriksa switch yang telah lama tidak diselenggara</p>
                  <a href="assets/img/projects/projector-1.jpg" title="Di Sekolah Kerajaan" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div> 

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-network">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/network-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Dewan Awam</h4>
                  <p>Pemasangan sistem rangkaian Wi-Fi tanpa wayar untuk kegunaan awam</p>
                  <a href="assets/img/projects/network-1.jpg" title="Di Dewan Awam" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-printer">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/printer-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pejabat Swasta</h4>
                  <p>Menukar dakwat pencetak dengan toner yang baharu</p>
                  <a href="assets/img/projects/printer-1.jpg" title="Di Pejabat Swasta" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-delivery">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/delivery-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Jabatan Kerajaan</h4>
                  <p>Menghantar dan memasang kesemua barang yang ditempah</p>
                  <a href="assets/img/projects/delivery-1.jpg" title="Di Jabatan Kerajaan" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-computer">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pc-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pejabat Sekolah</h4>
                  <p>Juruteknik sedang menukar kipas pada pemproses</p>
                  <a href="assets/img/projects/pc-2.jpg" title="Di Pejabat Sekolah" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-projector">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/projector-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Bilik Multimedia</h4>
                  <p>Pemasangan Projektor Baharu</p>
                  <a href="assets/img/projects/projector-2.jpg" title="Di Bilik Multimedia" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-network">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/network-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Makmal Komputer Sekolah Kerajaan</h4>
                  <p>Meningkatkan kelajuan rangkaian di dalam makmal</p>
                  <a href="assets/img/projects/network-2.jpg" title="Di Makmal Komputer Sekolah Kerajaan" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-printer">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/printer-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pejabat</h4>
                  <p>Juruteknik sedang memeriksa dan membersihkan roller sekiranya terdapat kotoran atau debu yang boleh menyebabkan kertas tersangkut</p>
                  <a href="assets/img/projects/printer-2.jpg" title="Di Pejabat" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-computer">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pc-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Makmal Komputer</h4>
                  <p>Juruteknik hadir untuk membuat penetapan BIOS pada komputer</p>
                  <a href="assets/img/projects/pc-3.jpg" title="Di Makmal Komputer" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-projector">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/projector-3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Dewan Peperiksaan</h4>
                  <p>Di dewan peperiksaan, juruteknik hadir untuk menerangkan masalah dengan projektor serta cara-cara untuk menyelesaikannya</p>
                  <a href="assets/img/projects/projector-3.png" title="Di Dewan Peperiksaan" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-network">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/network-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Di Kedai</h4>
                  <p>Juruteknik sedang menyediakan rangkaian menggunakan komputer riba, menyambungkannya ke router, dan mengkonfigurasi tetapan rangkaian bagi memastikan sambungan yang stabil</p>
                  <a href="assets/img/projects/network-3.jpg" title="Di Kedai" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-printer">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/printer-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Di Kedai</h4>
                  <p>Juruteknik sedang mengisi dakwat dalam kartrij bagi memastikan pencetak berfungsi dengan baik</p>
                  <a href="assets/img/projects/printer-3.jpg" title="Di Kedai" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <p>Pendapat dan Maklum Balas daripada pelanggan kami</p>
      </div><!-- End Section Title -->

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
            </div><!-- End testimonial item -->

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
            </div><!-- End testimonial item -->

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
            </div><!-- End testimonial item -->

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
            </div><!-- End testimonial item -->

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
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
  </main>

  <footer id="footer" class="footer dark-background">

  // footer content //
   
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
            <p class="mt-3"><strong>Phone:</strong> <span>010-454658/04-5732998</span></p>
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

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
?>