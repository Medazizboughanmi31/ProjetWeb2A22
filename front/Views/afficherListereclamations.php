<!DOCTYPE html>
<?php
require_once( '../Controller/reclamationC.php');
  require_once('../Controller/messageC.php');
	$reclamationC=new reclamationC();
  $messageC=new messageC();
	$listereclamations=$reclamationC->afficherreclamations(15,0); 
?>
<html>
<html>
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
    <script src="sweetalert.min.js"></script>
        <style>
            
            .box{ margin-left: 10%;
                min-height: 600px;
                width: 80%;display: grid;align-items: center;
               
                padding-top: 4em;background-color: rgba(35, 39, 35, 0);
            }
            .masque{
    content: "";
    background-color: rgba(35, 39, 35, 0.4);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
    background-repeat: no-repeat;
}
main{
  background-image: url('https://images.squarespace-cdn.com/content/v1/5d14e8bfa505890001205e37/1622211013212-NRT49RM5Y74D9XIM3DA9/le+blog+%284%29.png');
                background-size: cover;
                z-index: -2;        
}
            body{

                font-family: "Montserrat", sans-serif;
            }
            p{
margin:0.3em 2em;
            }
            p::first-letter{
                text-transform: uppercase;
               
            }
            dd:hover{
                background-color: #ffffffd7;
                transition: all 0.4s ease-in-out;
               transform: scale(1.02);
            }
            dl{margin: 1em;
                
            }
            dt{
                border-radius:50px;
                padding:1em;
                background-color: #ffffffab;

          
            }
            dd{ width: 80%;
                position: relative;
                margin:0.5em;  
                margin-left: 2em;
                background-color: rgba(255, 255, 255, 0.336);
                padding:1em;
                color :black;
                border-radius: 12px;
            }
           
            b{
                text-transform:capitalize;
              color:black;
            }
           .glyphicon-pencil,.glyphicon-duplicate,.glyphicon-trash,.glyphicon-plus{
                color:black;
                background-size: cover;
               
                opacity: 0.7;
            }
            .add{
                padding:0;
                margin-bottom: 2em;
            }
            .glyphicon-plus{
                width: 100%;
                padding:1em;
                 background-color: rgba(255, 255, 255, 0.336);
               
                border-radius: 12px
            }
          .date{
              position: absolute;
              font-size:x-small;
              color :black;
              margin: 0 5em;
          }
                
          .tech{
  position:absolute;
  font-size: large;
right:5%;
align-content: center;
background-color: transparent;
border: 0;
  padding:0%;
  margin:0;
  
}
.tech::after{
content: "copier";
background-color: #ffffff;
color: grey;
padding:0.7em;
border-radius: 7px;
border:solid 1px #aaa;
position :absolute;
bottom:-10%;
left: -200%;
transform: scale(0);
}
.tech:hover::after{
  transition:all 0.3s ease-in-out;  
  bottom:100%;
left: -200%;
  transform: scale(1);
}
.archive{
    position:relative;
    right:0%;
}
.archive::after{
    content: "archive";

}
        </style>

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
                                                <li><a href="reclamation.php">Réclamation</a>
                                                <ul class="submenu">
                                                        <li><a href="afficherlistereclamations.php">liste</a></li>
                                                        <li><a href="afficherlistereclamations_archive.php">archive</a></li>
                                                    </ul></li><li><a href="Room.html"></a>Room</li>
                                                <li><a href="adoptioncenter.html">Product</a>
                                                    <ul class="submenu">
                                                        <li><a href="elements.html">Cats</a></li>
                                                        <li><a href="elements.html">Dogs</a></li>
                                                        <li><a href="elements.html">More</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pet supplies.html">Pet Supplies</a></li>
                                                <li><a href="blog.html">Shipping</a></li>
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
<div class="masque">
<div class="box">
<h1 style="color:white;font-size:50px;">Reclamation active:</h1>

<dl>
<?php $i=0;
				foreach($listereclamations as $reclamation){
                    $i++;
			?>

  <dt>
  <!-- <form method="POST" action="modifierreclamation.php"> -->
						<!-- <button type="submit" name="Modifier" > <span class="glyphicon glyphicon-pencil"></span></button> -->
						<!-- <input type="input" value=<?PHP echo $reclamation['id_rec']; ?> name="id_rec" style="display:none;"> -->
					<!-- </form> -->
      <a href="archiverreclamation.php?id_rec=<?php echo $reclamation['id_rec']; ?>"  style="font-size: large; color:black;" class="tech archive">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
</svg>
                </a>
  <b><?php echo $reclamation['objet']; ?></b><br><p><?php echo $reclamation['detail']; ?></p> <div class="date"><?php echo $reclamation['date_rec']; ?></div></dt>
  <?php
  
  $listemessages=$messageC->affichermessages($reclamation['id_rec']); 
                 foreach($listemessages as $message){
     
             ?>

  <dd>
    <!-- <a href="#" style="font-size: large;"> -->
    <!-- <span class="glyphicon glyphicon-pencil"></span> -->
  <!-- </a> -->
      <button onclick="myFunction(<?php echo $message['id_message']; ?>)"class="tech" style="font-size: large;">
    <span name="<?php echo $message['id_message']; ?>" class="glyphicon glyphicon-duplicate"></span>
                 </button>
  <b><?php  if($message['id_user']==0){echo "admin";} else {echo "Guest_".$message['id_user'];} ?></b><br><p id="<?php echo $message['id_message']; ?>"><?php echo $message['detail']; ?></p> 
<div class="date"><?php echo $message['date_message']; ?></div>

</dd>
<?php
				}
			?>

  <dd class="add"><center><a href="ajoutermessage.php?id_rec=<?PHP echo $reclamation['id_rec']; ?> " style="font-size: large;">
    <span class="glyphicon glyphicon-plus"></span>
  </a></center></dd>
  <?php
				}
                if($i==0){
                    echo '<script language="javascript">swal({
                        title: "la table est vide!",
                        text: "Aucune reclamation ouverte!",
                        icon: "error",
                      });</script><h1 style="color:white;font-size:100px;opacity:0.5;">Aucune reclamation ouverte</h1>';
                }
			?>
 </dl>


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
                                        <li><a href="#">Rooms</a></li>
                                        <li><a href="#">product</a></li>
                                        <li><a href="#">Pet Supplies</a></li>
                                        <li><a href="#">Shipping</a></li>
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
    <script >
      function  myFunction(id){
        var str = document.getElementById(id);
        window.getSelection().selectAllChildren(str);
        document.execCommand("Copy");
        window.getSelection().removeAllRanges();
        document.getElementsByName(id)[0].className = "My_Class	glyphicon glyphicon-ok";
        setTimeout(function() {
 
            document.getElementsByName(id)[0].className = "My_Class	glyphicon glyphicon-duplicate";
  }, 1000);
        }
    </script>
</body>
</html>
