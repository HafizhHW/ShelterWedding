<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- LIGHTBOX -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

  <!-- <link rel="stylesheet" href="assets\fancybox\bootstrap.min.css"> -->
  <link rel="stylesheet" href="assets\fancybox\jquery.fancybox.css">
  <script src="assets\fancybox\jquery.min.js"></script>
  <script src="assets\fancybox\jquery.fancybox.min.js"></script>
  <!-- END LIGHTBOX -->

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link href="assets\bootstrap5\css\bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap5/css/carousel.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css\bootstrap-icons.css">
  <link rel="stylesheet" href="assets\lightbox\css\lightbox.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
  <link href=<?php echo base_url('assets\image\shelter.png'); ?> rel="icon" type="image/gif">
  <title>Shelter Wedding</title>
</head>

<body id="home">

  <!-- <?php // $this->load->view('Layout/Header'); 
        ?>; -->

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #94d2bd;">
    <!-- <nav class="navbar nav-custom bg-info navbar-color-on-scroll fixed-top navbar-expand-lg navbar-light navbar-transparent" color-on-scroll="100" id="sectionsNav" style="height: 60px;"> -->
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="assets\image\shelter.png" width="35" height="35"> Shelter Weeding</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <!-- <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li> -->
          <li class="nav-item <?php echo $this->uri->segment(1) == '#about' ? 'active' : '' ?>">
            <a class="nav-link" href="#about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/Gallery') ?>">Gallery</a>
            <!-- <a class="nav-link" href="#gallery">Gallery</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/Donatur') ?>">Donasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#media">Our Media</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- NAVBAR END -->

  <!-- CAROUSEL -->
  <section class="jumbotron me-2" style="background-color: #caf0f8;">
    <div class="container">
      <div id="myCarousel" class="carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="assets\image\carousel\1.jpeg" alt="First slide">


            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Gambar utama</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, asperiores.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="assets\image\carousel\3.jpeg" alt="Second slide">


            <div class="container">
              <div class="carousel-caption">
                <h1>Gambar 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate tempore minima laboriosam animi quas voluptatibus quod molestiae voluptatum a numquam?</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="assets\image\carousel\3.jpeg" alt="Third slide">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" src="assets/image/image3.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->

            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Gambar 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, hic rem vel qui in velit.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,32L288,224L576,96L864,160L1152,320L1440,128L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
    </svg>

  </section>
  <!-- CAROUSEL END -->

  <section class="jumbotron me-2" style="background-color: #caf0f8;">
    <div class="container">
      <div id="myCarousel" class="carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="assets\image\carousel\1.jpeg" alt="First slide">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="assets/image/image1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Gambar utama</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, asperiores.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="assets\image\carousel\3.jpeg" alt="Second slide">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->

            <div class="container">
              <div class="carousel-caption">
                <h1>Gambar 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate tempore minima laboriosam animi quas voluptatibus quod molestiae voluptatum a numquam?</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="assets\image\carousel\3.jpeg" alt="Third slide">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" src="assets/image/image3.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->

            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Gambar 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, hic rem vel qui in velit.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,32L288,224L576,96L864,160L1152,320L1440,128L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
    </svg>

  </section>

  <!-- ABOUT US -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Us</h2>
        </div>
      </div>
      <div class="row fs-5 justify-content-center">
        <div class="col-md-9">
          <p> Sebuah tempat di sentraland dengan ketinggian 60mdpl, puncak tertinggi sentraland)
            Bukan tempat kopi tapi tempat 2 insan saling bertemu, sebagai "ruang imajinasi" Mu,
            sebuah tempat yang bisa kau singgahi sebelum tempat yang kau sebut "rumah" Sebuah tempat
            dengan bentuk atap tenda bertiangkan bamboo dengan gerobak kayu di dalam nya,
            menyajikan single origin dari Indonesia di berbagai daerah mulai dari aceh hingga papua,
            dari flores hingga sumatera utara, dengan kopi susu nya kita sebut dengan “Kolab’s” (Kopi Kolaborasi) 1.0 3.0 4.0
            kenapa, karena nya kita terbentuk dari dua kedai kopi melebur menjadi satu.
            <br>Gak ada kopi yang ga bisa kamu ceritakan, semua punya kisah dan kasih nya tersendiri.
          </p>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#caf0f8" fill-opacity="1" d="M0,32L205.7,64L411.4,32L617.1,224L822.9,224L1028.6,64L1234.3,128L1440,224L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z"></path>
    </svg>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f8bc" fill-opacity="1" d="M0,128L205.7,224L411.4,256L617.1,96L822.9,128L1028.6,64L1234.3,192L1440,128L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z"></path></svg> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L205.7,224L411.4,256L617.1,96L822.9,128L1028.6,64L1234.3,192L1440,128L1440,0L1234.3,0L1028.6,0L822.9,0L617.1,0L411.4,0L205.7,0L0,0Z"></path></svg> -->
  </section>


  <!-- ABOUT US END -->

  <!-- GALLERY -->
  <section id="gallery" class="gallery" style="background-color: #caf0f8;">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Gallery</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\1.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\1.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\gallery\1.jpg" class="card-img-top" data-lightbox="example-set" alt="image 1"> -->
            <div class="card-body">
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad inventore aliquid veniam, est cum necessitatibus.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\2.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\2.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\gallery\2.jpg" class="card-img-top" alt="image 2"> -->
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, voluptates.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\3.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\3.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\gallery\3.jpg" class="card-img-top" alt="image 3"> -->
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\4.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\4.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\gallery\4.jpg" class="card-img-top" alt="image 4"> -->
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\5.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\5.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\gallery\5.jpg" class="card-img-top" alt="image 5"> -->
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\6.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\6.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\image1.jpeg" class="card-img-top" alt="image 6"> -->
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\7.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\7.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\image2.jpeg" class="card-img-top" alt="image 7"> -->
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php echo base_url(); ?>assets\image\gallery\8.jpeg" class="fancybox" data-fancybox="gallery1">
              <img src="<?php echo base_url(); ?>assets\image\gallery\8.jpeg" width="100%" height="100%">
            </a>
            <!-- <img src="assets\image\image3.jpeg" class="card-img-top" alt="image 8"> -->
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffff" fill-opacity="1" d="M0,160L240,288L480,160L720,192L960,160L1200,64L1440,224L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path>
    </svg>
  </section>
  <!-- GALLERY END -->

  <!-- CONTANCT -->
  <section id="media">
    <div class="container">
      <div class="row text-center mb-4 justify-content-center">
        <div class="col-md-4">
          <h2>Our Media</h2>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-4">
          <a href="https://api.whatsapp.com/send?phone=6282299737427"><i class="bi bi-whatsapp">&nbspWhatsApp</a></i>&nbsp&nbsp
          <a href="https://youtube.com/channel/UCqvldKviezXsoRZet1UHWcQ"><i class="bi bi-instagram">&nbspInstagram</i></a>&nbsp&nbsp
          <a href="https://www.instagram.com/shelterkopifelix?r=nametag"><i class="bi bi-youtube">&nbspYouTube</i></a>&nbsp&nbsp
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        <!-- <div class="chip ctc-analytics" style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#7f7d7d;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px; ">
        <span style="margin:0 8px 0 -12px;;order:0;"><svg style="pointer-events:none; display: block; height:32px; width:32px;" width="32px" height="32px" viewBox="0 0 1219.547 1225.016">
            <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z" />
            <linearGradient id="htwaicona-chat-s4" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
              <stop offset="0" stop-color="#20b038" />
              <stop offset="1" stop-color="#60d66a" />
            </linearGradient>
            <path fill="url(#htwaicona-chat-s4)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z" />
            <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)" />
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" />
            <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z" />
          </svg></span>
        <span class="ctc_cta">WhatsApp us</span>
      </div>
    </div>
    <span class="ht_ctc_chat_data" data-no_number="" data-settings="{&quot;number&quot;:&quot;6281392784240&quot;,&quot;pre_filled&quot;:&quot;Hello Klinik Kopi,&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 10px; right: 10px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:120,&quot;ani&quot;:&quot;no-animations&quot;,&quot;web&quot;:&quot;y&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}"></span>
  </div> -->
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#94d2bd" fill-opacity="1" d="M0,224L288,96L576,224L864,192L1152,224L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
      </svg>
  </section>
  <!-- media END -->

  <!-- <?php // $this->load->view('Layout/Footer'); 
        ?>; -->

  <!-- FOOTER -->
  <!-- <div class="card-footer text-muted">
      2 days ago
    </div> -->
  <footer class="text-black pb-2" style="background-color: #94d2bd;">
    <div class="contaner-fluid">
      <p class="text-center fw-bold">&copy;2021 Shelter Tech &middot; All rights reserved </p>
      <!-- <a href="https://gofood.link/a/yM9e2j1"> <img src="assets/image/gofood.png" width="50" hight="25"></a>
           <a class="ms-auto" href="#home">Back to top </a>       -->
    </div>
  </footer>
  <!-- FOOTER END -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script src="assets/bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="assets/lightbox/js/lightbox-plus-jquery.min.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <!-- <script src="assets/bootstrap5/js/bootstrap.min.js"></script>
    <script src="home/popper.min.js"></script> -->

</body>

</html>