<?php if (empty($messageErreur)){
  $messageErreur='';
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
    <nav class="navbar navbar-light navbar-expand-lg" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" id="CSsites" href="#page-top">CloudStudio</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/home.ctrl.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="#">help</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="arianneCont">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="../controler/home.ctrl.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" id="arianne" href="#">Sign Up</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="register-photo">
        <div class="form-container">
            <form method="post" action="../controler/inscrire.ctrl.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <p> <?=$messageErreur?> </p>
                <div class="form-group"><input class="form-control" name="Nom" placeholder="Name" required></div>
                <div class="form-group"><input class="form-control" name="Prenom" placeholder="Surname" required></div>
                <div class="form-group"><input class="form-control" type="email" name="Email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Password" required></div>
                <div class="form-group"><input class="form-control" type="password" name="Password-repeat" placeholder="Password (repeat)" required></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block d-xl-flex justify-content-xl-center" type="submit">Sign Up</button></div><a class="already" href="../controler/login.ctrl.php">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
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
