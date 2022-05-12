<?php
    include_once '../Model/message.php';
    include_once '../Model/reclamation.php';
    include_once '../Controller/messageC.php';
    include_once '../Controller/reclamationC.php';

    $error = "";

    // create message
    $message = null;
    $message = null;
	$reclamationC=new reclamationC();
    // create an instance of the controller
    $messageC = new messageC();
    $reclamation=null;
    
			if (isset($_GET['id_rec'])){
				$reclamation= $reclamationC->recupererreclamation($_GET['id_rec']);
            }

            $message1['id_rec']=$reclamation['id_rec'];
            $message1['id_user']=$reclamation['id_user'];

    if (
        isset($_POST["id_message"]) &&
		isset($_POST["date_message"]) &&		
        isset( $message1["id_user"]) &&
        isset($_POST["detail"]) && 
        isset(  $message1['id_rec'])
    ) {
        if (
         !empty($_POST["id_message"]) && 
			!empty($_POST['date_message'])  &&
            !empty($message1['id_user']) &&
            !empty($_POST["detail"]) && 
           !empty( $message1['id_rec'])
        ) {
            $message = new message(
                $_POST['id_message'],
				$_POST['date_message'],
                $message1['id_user'], 
                $_POST['detail'],
                $message1['id_rec']
            );
            $messageC->ajoutermessage($message);
            header('Location:afficherListereclamations.php');
       }
        else
            $error = "Missing information";
    }   
?>
<!DOCTYPE html>
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
               
                width: 80%;display: fixed;align-items: center;
                backdrop-filter: blur(5px);
                height:50em;
                
            }
            main{

                font-family: "Montserrat", sans-serif;
                background-image: url('https://images.squarespace-cdn.com/content/v1/5d14e8bfa505890001205e37/1622211013212-NRT49RM5Y74D9XIM3DA9/le+blog+%284%29.png');
                background-size: cover;
                background-attachment: fixed;
           
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
          
         
            b{text-transform:capitalize;
            }
        
            .add{
                padding:0;
            }
         input,textarea,button {
            margin: 0 0 10px 0;
    display: block;
    margin-left: auto;
    margin-right: auto ;
    background-color: #ffffffab;
    border: 0;
    padding: 0.5em;
    border-radius: 0.5em;
    width: 40%;
}
input{
    font-weight: bold;}
input:active,input:focus,textarea:active,textarea:focus{
    background-color: #ffffffab;
outline: none;
transform: scale(1.1);
transition: all 0.4s ease-in-out;
}
label{ color: white;font-size:x-large;
    display:grid;
place-items:center;
margin: 0;
padding:0;
}
textarea{
height: 8em;
}
    .glyphicon-remove,.glyphicon-ok{
                width: 100%;
                padding:1em ;
                margin: 0em;
                 background-color: rgba(255, 255, 255, 0.336);
                 color:black;
                background-size: cover;
             
                opacity: 0.7;
                border-radius: 12px;
               
            }
            .glyphicon-remove:hover,.glyphicon-ok:hover{
                color:white;
                background-color: rgba(224, 224, 224, 0.336);
    
            }
         .but{
            margin-left: 30%;
               color:transparent;
               width: 40%;           
         }
         
button{
    font-size: x-large;
    width: 200px;
  
}

        </style>

    </head>
<body>
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
                                                <li><a href="Room.html"></a>Room</li>
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

    <div id="error">
            <?php echo $error; ?>
        </div>
        <div class="masque">			
		
<div class="box" style="padding-top: 4em;">

<form action="" method="POST" >

<label for="detail"><b>Detail</b></label>
<textarea id="detail" name="detail"></textarea>
  
<div class="but">
<center>
<button type="reset" onclick="myfunction()" value="Modifier" style="padding: 0;"> 
            <span class="glyphicon glyphicon-ok"> Envoyer</span></button>
          
          </center>
         <center> 
            <button type="reset" value="Annuler"style="padding: 0;"> 
                <span class="glyphicon glyphicon-remove"> Annuler</span></button>
          </center>
          <div style="display: none;">
          <input type="submit" id="selfclick" >
          <input type="text" name="id_message" id="id_message" value="1" >
          <input type="text" name="date_message" id="date_message" value="44" >
          </div>
</div>
</form>

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
<script>
    
   function myfunction(){
       a=document.getElementById("detail").value;
    if(a =="")
{
    swal("champ de detail est obligatiore", {
      icon: "error", })
  
   
 } else{
    swal({
  title: "es-que vous êtes sûre?",
  text: "en cas d'envoi de ce message, vous n'avez plus accès pour le modifier ou le supprimer.!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("le message est envoyé avec succès!", {
      icon: "success", })
    .then((value) => {
        document.getElementById("detail").value=a;
  buttonclick();
});
    
   
    } else {
    swal("l'envoi est annulé!");
 
  }
});
}
   }
   function buttonclick(){
var pagebutton= document.getElementById("selfclick");
pagebutton.click();
}
</script>
</body>
</html>
