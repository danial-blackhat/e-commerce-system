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
  <title>Perkhidmatan Yang Dijalankan</title>
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

<body class="services-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
         
        <h1 class="sitename">BHBK</h1><span>COMPUTER</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Halaman Utama</a></li>
          <li><a href="about.php">Tentang Kami</a></li>
          <li><a href="services.php" class="active">Perkhidmatan</a></li>
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
    <div class="page-title dark-background" style="background-image: url(assets/img/service_bg.jpg);">
      <div class="container position-relative">
        <h1>Perkhidmatan</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Halaman Utama</a></li>
            <li class="current">Perkhidmatan</li>
          </ol>
        </nav>
      </div>
    </div> 

     
    <section id="services" class="services section light-background">

       
      <div class="container section-title" data-aos="fade-up">
        <h2>Perkhidmatan Yang Disediakan</h2>
        <p>BHBK Komputer menyediakan perkhidmatan yang pantas dan berpatutan untuk pembaikan komputer riba dan komputer, pembaikan pencetak, rangkaian, serta pemasangan sistem CCTV, sistem penggera, dan akses pintu. Pasukan kami sedia membantu memastikan peranti dan sistem keselamatan anda berfungsi dengan lancar di kediaman atau perniagaan anda</p>
      </div> 

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-computer"></i>
              </div>
              <h3>Pembaikan PC</h3>
              <ul>
                <li>Pembaikan Hardware</li>
                <li>Pembaikan Software</li>
                <li>Pemasangan Perkakasan</li>
                <li>Penyelenggaraan Rutin</li>
                <li>Ganti Skrin</li>
                <li>Ganti Keyboard</li>
                <li>Pembaikan Network</li>
                <li>Pembaikan Audio</li>
                <li>Masalah Kuasa</li>
                <li>Selesaikan Masalah Lain</li>
              </ul>
              
              
            </div>
          </div> 

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-sharp fa-solid fa-laptop"></i>
              </div>
              <h3>Pembaikan Laptop</h3>
              <ul>
                <li>Repair Hardware</li>
                <li>Pembaikan Software</li>
                <li>Ganti Skrin</li>
                <li>Ganti Bateri</li>
                <li>Ganti Keyboard</li>
                <li>Pembaikan Port USB</li>
                <li>Repair Kipas dan Cooling</li>
                <li>Ganti Hard Drive atau SSD</li>
                <li>Penyelenggaraan Rutin</li>
                <li>Selesaikan Masalah Power</li>
              </ul>              
              
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-sharp fa-solid fa-print"></i>
              </div>
              <h3>Pembaikan Pencetak</h3>
              <ul>
                <li>Kertas selalu tersangkut</li>
                <li>Cartridge tinta perlu ganti</li>
                <li>Masalah sambungan</li>
                <li>Kualiti cetakan yang tidak jelas</li>
                <li>Drum pencetak rosak</li>
                <li>Reset pencetak</li>
                <li>Pencetak kotor</li>
                <li>Masalah pengimbasan tidak berfungsi</li>
                <li>Kabel pencetak perlu diganti</li>
                <li>rutin service pencetak</li>
              </ul>            
              
            </div>
          </div> 

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-network-wired"></i>
              </div>
              <h3>Networking</h3>
              <ul>
                <li>Setup Wi-Fi</li>
                <li>Pemasangan router</li>
                <li>Selesaikan masalah internet</li>
                <li>Ganti atau repair kabel</li>
              </ul>              
              
            </div>
          </div> 

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-camera"></i>
              </div>
              <h3>CCTV/Alarm System/Access Door </h3>
              <ul>
                <li>Pemasangan CCTV</li>
                <li>Setup sistem alarm</li>
                <li>Pemasangan pintu akses</li>
                <li>Servis dan penyelenggaraan CCTV</li>
                <li>Repair sistem alarm</li>
              </ul>
              
              
            </div>
          </div> 

        </div>

      </div>

    </section> 

     
    <section id="alt-services" class="alt-services section">

      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/tech2_services.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Perkhidmatan Baik Pulih Komputer BHBK di Cawangan Pokok Sena</h3>
            <p>Ada masalah dengan laptop anda? Kami sedia membantu</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-power flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Laptop Tak Boleh Hidup</a></h4>
                <p>Laptop tidak menunjukkan sebarang tanda-tanda kuasa, mungkin disebabkan oleh bateri yang rosak, pengecas yang tidak berfungsi, atau masalah motherboard.</p>
              </div>
            </div> 
            
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-arrow-clockwise flex-shrink-0"></i>

              <div>
                <h4><a href="" class="stretched-link"> Auto Shutdown</a></h4>
                <p>Laptop Autoshutdown semasa digunakan, biasanya berpunca daripada masalah overheating, RAM rosak, atau gangguan virus dalam sistem.</p>
              </div>
            </div> 

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-display flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Blue Screen (BSOD)</a></h4>
                <p>Skrin biru muncul apabila sistem mengalami ralat kritikal, sering disebabkan oleh masalah perkakasan seperti RAM atau cakera keras, atau pemandu (driver) yang rosak.</p>
              </div>
            </div> 

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-lightning flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Masalah Pengecasan</a></h4>
                <p>Laptop tidak dapat dicas walaupun pengecas disambung, mungkin disebabkan oleh pengecas, bateri, atau port pengecas yang rosak.</p>
              </div>
            </div> 

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-droplet flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Water Damage</a></h4>
                <p>Laptop terkena air boleh menyebabkan litar pintas dan merosakkan komponen dalaman. Segera matikan laptop dan hantar untuk pemeriksaan bagi mengelakkan kerosakan lebih lanjut.</p>
              </div>
            </div> 

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-keyboard flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Touchpad/Keyboard tidak Berfungsi</a></h4>
                <p>Touchpad atau papan kekunci tidak berfungsi dengan betul, mungkin disebabkan oleh kerosakan perkakasan atau sambungan dalaman yang longgar, atau masalah pemandu (driver).</p>
              </div>
            </div> 

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-exclamation-triangle flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">No Bootable Device Dikesan</a></h4>
                <p>Mesej ini muncul apabila laptop tidak dapat mengesan sistem operasi pada cakera keras. Masalah ini sering berkait dengan cakera keras yang rosak atau fail sistem yang hilang.</p>
              </div>
            </div> 

          </div>
        </div>

      </div>

    </section> 

     
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  g-2 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">

          <li class="nav-item col-3" role="presentation">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">
              <h4>Problem Computer</h4>
            </a>
          </li> 

          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" tabindex="-1" role="tab">
              <h4>Problem Laptop</h4>
            </a> 

          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" tabindex="-1" role="tab">
              <h4>Problem Printer</h4>
            </a>
          </li> 

          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false" tabindex="-1" role="tab">
              <h4>Problem Networking</h4>
            </a>
          </li> 

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>PC bermasalah? Mari Kita Kenal Pasti Masalahnya!</h3>
                <p class="fst-italic">
                  Kami memahami bahawa pelanggan kami sering menghadapi pelbagai masalah. Di bawah ini, anda boleh melihat beberapa isu yang biasa kami tangani. Jika masalah yang anda alami adalah sama, kami sedia membantu menyelesaikannya. Namun, jika isu yang anda hadapi berbeza, jangan risau! Anda boleh menghantar maklumat kepada kami, dan kami akan melakukan pemeriksaan secara percuma.
                </p>
                <ul style="list-style-type: disc; color: black;">
                  <li>Tiada paparan</li>
                  <li>Skrin Biru (Blue Screen)</li>
                  <li>HDD/SSD tidak dikesan</li>
                  <li>Bekalan kuasa tidak berfungsi</li>
                  <li>Ralat CMOS</li>
                  <li>Tidak dapat masuk ke Windows</li>
                  <li>Prestasi perlahan</li>
              </ul>
              
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/blue_screen.png" alt="" class="img-fluid">
              </div>
            </div>
          </div> 

          <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Laptop bermasalah? Mari Kita Kenal Pasti Masalahnya!</h3>
                <p class="fst-italic">
                  Kami faham pelanggan sering menghadapi pelbagai masalah. Berikut adalah beberapa isu biasa yang kami tangani. Jika masalah anda tersenarai, kami sedia membantu. Jika tidak, hantar maklumat ataupun bawa laptop anda terus ke kedai, dan kami akan lakukan pemeriksaan secara percuma.
                </p>
                <ul style="list-style-type: disc; color: black;">
                  <li>Ralat CMOS</li>
                  <li>Prestasi perlahan</li>
                  <li>HDD/SSD tidak dikesan</li>
                  <li>Skrin Biru (Blue Screen)</li>
                  <li>Tidak dapat masuk ke Windows</li>
                  <li>Masalah bateri seperti bateri kembung, tidak dapat dicas, atau cepat habis.</li>
                  <li>Masalah fizikal laptop seperti hinge rosak, casing pecah, atau tidak boleh dihidupkan.</li>
                  <li>Masalah skrin laptop seperti skrin retak, glitch, tiada paparan, masalah backlight, garisan pada skrin, atau skrin hilang.</li>
              </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/screen_crack.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div> 

          <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Printer bermasalah? Mari Kita Kenal Pasti Masalahnya!</h3>
                <p class="fst-italic">
                  Kami memahami bahawa pelanggan sering berdepan dengan pelbagai masalah pencetak. Di bawah ini adalah antara isu yang kerap kami selesaikan. Jika masalah anda ada di sini, kami boleh membantu. Jika tidak, anda boleh berkongsi maklumat dengan kami atau bawa pencetak anda ke kedai untuk pemeriksaan percuma.
                </p>
                <ul style="list-style-type: disc; color: black;">
                  <li>Paper jammed</li>
                  <li>Waste tank full</li>
                  <li>Dakwat tidak dapat dikesan</li>
                  <li>Kedudukan kertas tidak selaras</li>
                  <li>Kertas tidak berjaya ditarik masuk</li>
              </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/buka_catridge.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div> 

          <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Networking bermasalah? Mari Kita Kenal Pasti Masalahnya!</h3>
                <p class="fst-italic">
                  Kami memahami bahawa ramai pelanggan sering menghadapi pelbagai masalah rangkaian. Berikut adalah antara isu yang sering kami selesaikan. Sekiranya masalah anda terdapat dalam senarai ini, jangan risau, kami sedia membantu. Jika tidak, anda boleh berkongsi masalah tersebut dengan kami atau membawa peranti terus ke kedai untuk pemeriksaan percuma.
                </p>
                <ul>
                  <li><strong>Internet Slow</strong>: Kelajuan sambungan yang perlahan mungkin disebabkan oleh lebar jalur (bandwidth) yang terhad atau masalah daripada pembekal perkhidmatan internet (ISP).</li>
                  <li><strong>Konflik IP</strong>: Dua device yang mengunakan IP yang sama.</li>
                  <li><strong>Masalah Router/Switch</strong>:Router atau switch mengalami masalah dan tidak berfungsi.</li>
                  <li><strong>Wi-Fi Tidak Stabil</strong>: Isyarat tidak kuat atau terlalu jauh dari router.</li>
                  <li><strong>Firewall Block</strong>: Firewall block akses ke network.</li>
                  <li><strong>Masalah DNS</strong>: Pelayan DNS mengalami masalah, menyebabkan laman web tidak dapat diakses.</li>
                  <li><strong>Kabel/Port Rosak</strong>: Kabel atau port tak function dengan baik.</li>
                  <li><strong>Latensi Tinggi</strong>: Penghantaran data delay/lambat diterima disebabkan oleh talian yang sibuk.</li>
                  <li><strong>Konfigurasi Salah</strong>: Tetapan rangkaian tidak tepat.</li>
                  <li><strong>Masalah Sekuriti</strong>: Mengalami pencerobohan atau serangan siber yang mengganggu rangkaian.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/pasang_networking.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div> 

        </div>

      </div>

    </section> 

        
       <section id="testimonials" class="testimonials section">

         
        <div class="container section-title" data-aos="fade-up">
          <h2>Testimoni</h2>
          <p>Apa kata pelanggan kami</p>
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