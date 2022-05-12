<?php
    include_once '../Model/reclamation.php';
    include_once '../Controller/reclamationC.php';
   $error = "";
   // create reclamation
    $reclamation = null;
   // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        isset($_POST["objet"]) && 
        isset($_POST["detail"]) 
    ) {
        if (
          !empty($_POST["objet"]) && 
            !empty($_POST["detail"])
        ) {
            $reclamation = new reclamation(
                $_POST['id_rec'],
				$_POST['date_rec'],
                $_POST['id_user'], 
				$_POST['objet'],
                $_POST['detail'],
                $_POST['etat']
            );
            $reclamationC->ajouterreclamation($reclamation);
            header('Location:afficherListereclamations.php');
        }
        else
            $error = "Missing information";
    }
    
    ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Front-end</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loader.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="reclamation.html">Réclamation</a></li>
                                                <li><a href="adoptioncenter.html">Product</a>
                                                    <ul class="submenu">
                                                        <li><a href="elements.html">men</a></li>
                                                        <li><a href="elements.html">women</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Shoping</a></li>
                                                <li><a href="events.php">events</a>
                                                    <ul class="submenu">
                                                        <li><a href="events.php#speakers">speakers</a></li>
                                                        <li><a href="events.php#schedule">schedule</a></li>
                                                        <li><a href="events.php#venue">venue</a></li>
                                                        <li><a href="events.php#hotels">hotels</a></li>
                                                        <li><a href="events.php#gallery">gallery</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="page de connexion.html" class="btn header-btn">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active dot-style">
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Réclamation</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Provide us a green and healthy life<br> we need to protect </P>
                                    <!-- Hero-btn -->
                                    <form action="" method="POST" >
                                  
       
            <table align="center">
               
				<tr data-animation="fadeInUp" data-delay=".6s">
                    <td>
                        <label for="Objet"  style="color:white;">Objet:
                        </label>
                    </td>
                    <td><input type="text" name="Objet" id="Objet" maxlength="20" style="background:#ffffff55;border:0;"></td>
                </tr>
               
                <tr data-animation="fadeInUp" data-delay=".6s">
                    <td>
                        <label for="date" style="color:white;">Date d'réclamation
                        </label>
                    </td>
                    <td>
                       <h2 id ="date"style="color:white;"><?php echo date("Y/m/d") ;?>
                        </h2>
                    </td>
                </tr>  
                <tr data-animation="fadeInUp" data-delay=".6s">
                    <td>
                        <label for="detail" style="color:white;">description
                        </label>
                    </td>
                    <td>
                        <textarea name="detail" id="detail"style="background:#ffffff55;border:0;" ></textarea>
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <div style="display: none;">
          <input type="text" name="id_rec" id="id_rec" value="11" >
          <input type="date" name="date_rec" id="date_rec" value="11" >
          <input type="text" name="id_user" id="id_user" value="15" >
          <input type="text" name="etat" id="etat" value="0">
          </div>                      
                    <td>
                    <button type="submit"style="background-color:transparent;border:0;"> <a class="hero-btn mb-10"  value="Envoyer"  class="hero-btn mb-10" data-animation="fadeInUp" data-delay=".8s"> Envoyer</a></button>
                    </td>
                    <td>
                    <button type="reset" style="background-color:transparent;border:0;"><a class="hero-btn mb-10" value="Annuler"  data-animation="fadeInUp" data-delay=".8s">Annuler</a></button>
                    </td>
                </tr>
            </table>
        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
       
    </main>
    <footer>
        <div class="footer-wrapper">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>women are the angels of this earth.</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter" target="_blank"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f" target="_blank"></i></a>
                                        <a href="#"><i class="fab fa-instagram" target="_blank"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>SiteMap</h4>
                                    <ul>
                                        <li><a href="#">product</a></li>
                                        <li><a href="#">Shoping</a></li>
                                        <li><a href="#">events</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact us</h4>
                                    <ul>
                                        <li><a href="#">petpaw@gmail.com</a></li>
                                        <li><a href="#">Avenue Habib Bourgiba</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li class="number"><a href="#">(216) 27086763</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by PetPaw
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
<script>var today = new Date();
var date =today.getDate()+'/'+(today.getMonth()+1)+'/'+ today.getFullYear();
var a=document.getElementById("dat").textContent=": "+date;
</script>
</body>

</html>