<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- DEFAULT -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- MODIFY -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="HandheldFriendly" content="true">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets\bootstrap\bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <!-- MyCSS -->
    <link rel="stylesheet" href="css\mycss.css">

    <link href=<?php echo base_url('assets\image\logo\Shelterwedding_Tny.png'); ?> rel="icon" type="image/gif">
    <title>Shelter Wedding</title>
</head>

<body>
    <!-- NAVBAR START -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top"> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets\image\logo\Shelterwedding_Tny.png" width="35px" height="35px"> Shelter Wedding</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo site_url('Home'); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url('Package'); ?>">Package</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- JUMBOTRON START -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Selamat Datang Di Shelter Wedding</h1>
            <!-- <hr class="my-4"> -->
            <p>Wujudkan Pernikahan Impian Anda Bersama Kami</p>
            <!-- <button type="submit" class="btn btn-outline-primary" onclick="window.location.href('Regist/index');">Daftarr</button> -->
            <a href="<?php echo base_url('index.php/Regist') ?>" class="btn btn-outline-success" role="button">Daftar</a>
        </div>
    </div>
    <!-- JUMBOTRON END -->

    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <!-- <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="assets\image\decoration\Paket 1\WhatsApp Image 2022-03-11 at 15.18.36 (1).jpeg" alt="Generic placeholder image" width="140" height="140">
                <h2>Paket 1</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="assets\image\large\DSC03340.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Paket 2</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="assets\image\small\DSC03334.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Paket 3</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div> -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 ">
                <h2 class="featurette-heading">Wedding Package
                    <!--<span class="text-muted">It'll blow your mind.</span>-->
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <P><a class="" href="">Learn More</a></P>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="assets\image\decoration\Paket 1\WhatsApp Image 2022-03-11 at 15.18.36 (1).jpeg">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Engagement Package
                    <!-- <span class="text-muted">See for yourself.</span> -->
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <P><a class="" href="">Learn More</a></P>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="assets\image\decoration\Backdrop akad.jpeg">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Birthdays Package
                    <!-- <span class="text-muted">Checkmate.</span> -->
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <P><a class="" href="">Learn More</a></P>
            </div>
            <div class="col-md-5">
                <img width="270" height="350" class="featurette-image justify-content-end" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="assets\image\decoration\Birthday.jpeg">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    </main>

    <!-- /END THE FEATURETTES -->

    <!-- Optional JavaScript -->

    <script>
        $(".nav .nav-link").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>