<?php

 ?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Home - Brand</title>
     <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
     <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
     <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
     <link rel="stylesheet" href="../assets/css/404-NOT-FOUND-animated.css">
     <link rel="stylesheet" href="../assets/css/Animated-CSS-Waves-Background-SVG.css">
     <link rel="stylesheet" href="../assets/css/Background-motion1-1.css">
     <link rel="stylesheet" href="../assets/css/Background-motion1.css">
     <link rel="stylesheet" href="../assets/css/Contact-Form-Clean-1.css">
     <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
     <link rel="stylesheet" href="../assets/css/Drag--Drop-Upload-Form.css">
     <link rel="stylesheet" href="../assets/css/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.css">
     <link rel="stylesheet" href="../assets/css/Drag-Drop-File-Input-Upload.css">
     <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
     <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
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
                     <li class="nav-item"><a class="nav-link" id="pagesSite" href="../controler/settings.ctrl.php">Account</a></li>
                     <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/logout.ctrl.php">Log out</a></li>
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
                     <li class="nav-item"><a class="nav-link" id="arianne" href="#">Projects</a></li>
                     <li class="nav-item"></li>
                     <li class="nav-item"></li>
                 </ul>
             </div>
         </div>
     </nav>
     <div>
         <div class="container" id="projectCreation">
             <div class="row d-xl-flex" id="profilRow">
                 <div class="col-md-12 offset-xl-0"><img src=<?=$profilePic?>>
                     <p class="profilPic"><?=$name?></p><small><?=$mail?></small>
                 </div>
             </div>
             <div class="row" style="width: 100%;">
                 <div class="col-md-12" id="ProfilSelecRow2">
                     <p class="ProjectP">Projects</p><small>All your projects</small><button class="btn" id="Plus" type="button"><img src="../assets/img/Groupe%2054.png"></button>
                 </div>
             </div>
             <div class="table-responsive" id="allProj">
                 <table class="table">
                     <thead>
                         <tr></tr>
                     </thead>
                     <tbody>
                       <?php if ($nbProjet==0){?>
                         <tr>
                             <a href="#">You have no project. Create one.</a>
                         </tr>
                       <?php
                        }
                        else{
                          for ($i = 1; $i <= $nbProjet; $i++){?>
                            <tr>
                                <td><?=$$i?></td>
                                <td id="openTD"><button class="btn" id="Open" type="button">Open</button><button class="btn" id="Open" type="button">Delete</button></td>
                            </tr>
                          <?php }
                        }?>
                     </tbody>
                 </table>
             </div>
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
     <script src="../assets/js/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.js"></script>
 </body>

 </html>
