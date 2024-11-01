<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/404-NOT-FOUND-animated.css">
    <link rel="stylesheet" href="../assets/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="../assets/css/Background-motion1-1.css">
    <link rel="stylesheet" href="../assets/css/Background-motion1.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styleAccueil.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">CloudStudio</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                  <?php
                    if (empty($_SESSION['User'])){ ?>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/home.ctrl.php">About</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/home.ctrl.php">Contact</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/login.ctrl.php">Log In</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/signUp.ctrl.php">Sign Up</a></li>

                  <?php
                    }else{
                  ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/home.ctrl.php">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/home.ctrl.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/projects.ctrl.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../controler/logout.ctrl.php">Log Out</a></li>
                  <?php }?>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center text-white d-flex" style="filter: brightness(100%);">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong class="text-capitalize" id="header-text">Create without boundaries</strong></h1>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p id="p-header" class="text-faded mb-5">Back up your work in the cloud and collaborate with other artists. You've never been so close from each other.</p>
                <?php
                  if (empty($_SESSION['User'])){ ?>
                    <a class="btn btn-light btn-xl js-scroll-trigger" role="button" href="#services">Get Started</a>
                <?php
                  }else{
                ?>
                  <a class="btn btn-light btn-xl js-scroll-trigger" role="button" href="../controler/projects.ctrl.php">Start Now</a>
                <?php }?>
            </div>
        </div>
    </header>
    <section id="fl-pic">
        <div class="container" id="aircont-1">
            <div class="row">
                <div class="col d-xl-flex order-2 justify-content-xl-start text-center" data-aos="fade-right" data-aos-duration="1050">
                    <div class="align-self-center service-box mt-5">
                        <h3 class="mb-3" style="text-align: left;">Collaborate anywhere</h3>
                        <p class="text-muted mb-0" style="text-align: left;">Work with other artists on the same project files. See the changes they make when they make them.</p>
                    </div>
                </div>
                <div class="col-xl-7 order-2 text-center"><img data-aos="fade-up" data-aos-duration="1050" id="fls" src="../assets/img/fls.png"></div>
            </div>
        </div>
    </section>
    <section id="Ariana-black">
        <div class="container" id="aircont-2">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl-7 d-xl-flex order-1 justify-content-xl-start text-center"><img data-aos="fade-up" data-aos-duration="1050" class="ari" src="../assets/img/ari2.png"></div>
                <div class="col d-xl-flex order-2 justify-content-xl-end text-center" data-aos="fade-left" data-aos-duration="1050">
                    <div class="align-self-center service-box mt-5">
                        <h3 id="grey-zone-title" class="mb-3">Collaborate anywhere</h3>
                        <p class="text-muted mb-0" id="p-grey-zone">Work with other artists on the same project files. See the changes they make when they make them.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fl-pic">
        <div class="container" id="aircont-2">
            <div class="row">
                <div class="col d-xl-flex order-2 justify-content-xl-start text-center" data-aos="fade-right" data-aos-duration="1050">
                    <div class="align-self-center service-box mt-5">
                        <h3 class="mb-3" style="text-align: left;">Go back to any version</h3>
                        <p class="text-muted mb-0" style="text-align: left;">Experiment without consequences.&nbsp;<br>Go back in time at any time.</p>
                    </div>
                </div>
                <div class="col-xl-7 order-2 text-center"><img data-aos="fade-up" data-aos-duration="1050" id="fls" src="../assets/img/pr.png"></div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="example-box">
            <div class="background-shapes"></div>
            <h1><strong>Start now for free</strong></h1>
            <?php
              if (empty($_SESSION['User'])){ ?>
                <a class="btn btn-light btn-xl sr-button" role="button" data-aos="zoom-in" data-aos-duration="400" data-aos-once="true" id="sign-up" href="../controler/signUp.ctrl.php">Sign up</a>
            <?php
              }else{
            ?>
              <a class="btn btn-light btn-xl sr-button" role="button" data-aos="zoom-in" data-aos-duration="400" data-aos-once="true" id="sign-up" href="../controler/projects.ctrl.php">Start Now</a>
            <?php }?>
        </div>
    </section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="#">How to Start ?</a></li>
                            <li><a href="#">You have an issue ?</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>CloudStudio</h3>
                        <p>CloudStudio is a music project management platform.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">CloudStudio © 2020</p>
            </div>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/creative.js"></script>
</body>

</html>
