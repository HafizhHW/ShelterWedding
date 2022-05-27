<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- MyCSS -->
    <link rel="stylesheet" href="css\mycss.css">

    <link href=<?php echo base_url('assets\image\logo\Shelterwedding_Tny.png'); ?> rel="icon" type="image/gif">
    <title>Home - Shelter Wedding</title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-light text-white"> -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container col-lg-9">
            <a class="navbar-brand" href="#"><img src="assets\image\logo\Shelterwedding_Tny.png" width="35px" height="35px"> shelter wedding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo site_url('Package'); ?>">Package</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <nav class="navbar navbar-light">
        <div class="container">
            <div class="row">
                <div class="navbar-brand col-lg-4">
                    <a class="navbar-brand" href="#"><img src="assets\image\logo\Shelterwedding_Tny.png" width="35px" height="35px"> Shelter Wedding</a>
                </div>
                <ul class="nav col-lg-7 ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo site_url('Package'); ?>">Package</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
        <div class="container col-lg-9">
            <a class="navbar-brand" href="#"><img src="assets\image\logo\Shelterwedding_Tny.png" width="35px" height="35px"> Shelter Wedding</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo site_url('Package'); ?>">Package</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav> -->

    <!-- HERO-1 START -->

    <section id="hero-1">

        <div class="container-fluid">
            <div class="row fs-5 justify-content-center mt-5">
                <div class="col-6 md-6">
                    <br>
                    <p class="text-white"> Sebuah tempat di sentraland dengan ketinggian 60mdpl, puncak tertinggi sentraland)
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

    </section>

    <!-- HERO-1 END -->

    <!-- HERO-2 START -->

    <section id="hero-2">
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6 col-8 mb-3 ms-20">
                <div class="card p-4">
                    <img src="<?php echo base_url(); ?>assets\image\decoration\Paket 1\WhatsApp Image 2022-03-11 at 15.18.36.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text mb-5">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-8 mb-3">
                <div class="card p-4">
                    <img src="<?php echo base_url(); ?>assets\image\decoration\Paket 2\WhatsApp Image 2022-03-11 at 15.20.09.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text mb-5">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-8 mb-3 me-20">
                <div class="card p-4">
                    <img src="<?php echo base_url(); ?>assets\image\decoration\Birthday.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center mb-3 mt-3">
            <div class="col">
                <h1>Lorem</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col col-8 md-8 sm-8 text-center">
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit non delectus, nesciunt quaerat repellat tempore sunt! Rerum eum quos laudantium et, a repellendus, voluptatum, quibusdam tenetur perspiciatis tempora numquam quidem. Repellendus eaque molestias numquam architecto, inventore reiciendis incidunt sapiente deleniti!</p>
            </div>
        </div>

    </section>

    <!-- <section id="hero-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="<?php echo base_url(); ?>assets\image\decoration\Paket 1\WhatsApp Image 2022-03-11 at 15.18.36.jpeg" class="img-fluid img-place-header rounded">
                            <img src="<?php //echo base_url(); 
                                        ?>assets\image\decoration\Paket 1\WhatsApp Image 2022-03-11 at 15.18.36.jpeg" width="100%" height="100%">
                        </a>
                        //diantara komen
                        <img src="assets\image\gallery\1.jpg" class="card-img-top" data-lightbox="example-set" alt="image 1">
                        //diantara komen
                        <div class="card-body">
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad inventore aliquid veniam, est cum necessitatibus.</p>
                            <p class="card-text"><a class="" href="">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="<?php echo base_url(); ?>assets\image\decoration\Paket 2\WhatsApp Image 2022-03-11 at 15.20.09.jpeg" class="img-fluid img-place-header rounded">
                            <img src="<?php //echo base_url(); 
                                        ?>assets\image\decoration\Paket 2\WhatsApp Image 2022-03-11 at 15.20.09.jpeg" width="100%" height="100%">
                        </a>
                        //diantara komen
                        <img src="assets\image\gallery\2.jpg" class="card-img-top" alt="image 2">
                        //diantara komen
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, voluptates.</p>
                            <p class="card-text"><a class="" href="">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="<?php //echo base_url(); 
                                    ?>assets\image\decoration\Birthday.jpeg" class="img-fluid img-place-header rounded">
                            <img src="<?php echo base_url(); ?>assets\image\decoration\Birthday.jpeg" width="100%" height="100%">
                        </a>
                        //diantara komen
                        <img src="assets\image\gallery\3.jpg" class="card-img-top" alt="image 3">
                        //diantara komen
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            <p class="card-text"><a class="" href="">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- HERO-2 END -->

    <section id="hero-3">
        <div class="container-fluid">
            <div class="row fs-5 justify-content-center">
                <div class="col-6">
                    <br>
                    <p class="">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Porro, ratione ipsam praesentium voluptatibus delectus incidunt non? Ipsum impedit dolorem,
                        eligendi molestiae rerum debitis alias optio ullam perspiciatis exercitationem.
                        Cumque, commodi incidunt atque, culpa ab alias debitis labore quis dolorem at saepe a, rerum ut? Est repellat rerum iure in nesciunt?
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- Optional JavaScript -->

    <script>
        $(".navbar .nav-link").on("click", function() {
            $(".navbar").find(".active").removeClass("active");
            $(this).addClass("active");
        });
    </script>

    <script>
        $(".navbar .nav-link").on("click", function() {
            $(".navbar").find(".active").removeClass("active");
            $(this).addClass("active");
        });
    </script>

    <!-- <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        })
    </script> -->



</body>

</html>