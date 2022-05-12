<?php
	include_once '../Model/magasin.php';
	include_once '../Controller/magasinC.php';
	
	$magasinC=new magasinC();
	$listemagasins=$magasinC->affichermagasins(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <style>
        /*the container must be positioned relative:*/
        .custom-select {
          position: relative;
          font-family: Arial;
        }

        
        .custom-select select {
          display: none; /*hide original SELECT element:*/
        }
        
        .select-selected {
          background-color: DodgerBlue;
        }
        
        /*style the arrow inside the select element:*/
        .select-selected:after {
          position: absolute;
          content: "";
          top: 14px;
          right: 10px;
          width: 0;
          height: 0;
          border: 6px solid transparent;
          border-color: #fff transparent transparent transparent;
        }
        
        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
          border-color: transparent transparent #fff transparent;
          top: 7px;
        }
        
        /*style the items (options), including the selected item:*/
        .select-items div,.select-selected {
          color: #ffffff;
          padding: 8px 16px;
          border: 1px solid transparent;
          border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
          cursor: pointer;
          user-select: none;
        }
        
        /*style items (options):*/
        .select-items {
          position: absolute;
          background-color: DodgerBlue;
          top: 100%;
          left: 0;
          right: 0;
          z-index: 99;
        }
        
        /*hide the items when the select box is closed:*/
        .select-hide {
          display: none;
        }
        
        .select-items div:hover, .same-as-selected {
          background-color: rgba(0, 0, 0, 0.1);
        }
        </style>
        
    <style>
        iframe{
            width: 100%;
            height: 700px;
            background-size:  cover;        }
            .card{
                width: 40%;
                height: 50%;
                background-color: white;
                color: black;
                top:10%;
                left: 10%;
                position: absolute;
                
                border-radius: 20px;
                box-shadow: 4px 6px 43px -3px rgba(0,0,0,0.52);
-webkit-box-shadow: 4px 6px 43px -3px rgba(0,0,0,0.52);
-moz-box-shadow: 4px 6px 43px -3px rgba(0,0,0,0.52);
display: flex;
            }
            .elem{
                width: 50%;
                position: relative;
            }
            .h{
                width: 80%;
                margin: 10%;
                text-align: center;
                font-size:25px
                
            }
            .buton{
                width: 40%;
                height: auto;
                text-align: center ;
                left: 30%;
                bottom: 10%;
                display: block;
                margin-right: auto ;
                background-color: green;
                color: white;
                text-decoration: none;
                padding: 1em 0;
                font-size:17px;
                text-transform: uppercase;
                cursor: pointer;
                position: absolute;
            border-radius: 10px;     
            }
                .buton:hover{
                 color: greenyellow;   
                }
                /* #horaire{ */
                    /* margin:10px; */
                    
                /* } */
                .horaire{
                    border: 1px solid black;
                    margin: auto;
                    width: 70%;
                  }
                  .button_modifier{
                      border: 0;
                      background: black;
                      color: white;
                      position: relative;
                      overflow:hidden;
                      padding: 10px 30px;
                      border-radius:30px;
                      cursor: pointer;
                      font-family: 'PT Sans', sans-serif;
                      font-size:15px;
                      

                  }
                  .h_adresse{
                    font-size:50px

                  }
                  .choisir_police{
                    font-family: 'PT Sans', sans-serif;
                    font-size:25px;
                    
                  }
                  .button_supprimer{
                    border: 0;
                      background: linear-gradient(225deg,#27d86c 0%,#26caf8 50%, #c625d0 100%);
                      color: white;
                      position: relative;
                      overflow:hidden;
                      padding: 10px 30px;
                      border-radius:30px;
                      cursor: pointer;
                      font-family: 'PT Sans', sans-serif;
                      font-size:15px;
                  }
                 
                  
               a{
                   font-weight:800;
                   text-decoration:none;
                   color:black;
               }   
 
        

    </style>
</head>
<body>
    	
		<?php
			if (isset($_GET['id_magasin'])){
				$magasin = $magasinC->recuperermagasin($_GET['id_magasin']);
               
           
				
		?>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.0059655165546!2d10.16108131524885!3d36.84233317993991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd333723654b7b%3A0xb34ea783a7c8880f!2sManar%20City!5e0!3m2!1sfr!2stn!4v1649798327407!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
<div class="card">
            <div class="elem" style="background-color: white" >
                <h2 class="h">
                <?php echo $magasin['nom_magasin']; ?>
                </h2>
                <h4 class="h">
                <?php echo $magasin['adresse_magasin']; ?>
                </h4>
               
                <br>
                <h4 class="h">
                <?php echo $magasin['tel_magasin']; ?>
                </h4>
                

                <i href="tel:<?php echo $magasin['tel_magasin']; ?>" class="buton" > Call us </i>
                
            </div>

                <div class="elem" style="background-color:rgb(247, 247, 247);">
                2
                <h2 class="h" style="margin-top: 4%;">Horaires</h2>
               <!-- <li id="horaire"> -->
                    <!-- <h4 class="h"> -->
                        <!-- Lundi 8h->18h -->
                    <!-- </h4> -->
                    
                <!-- </li> -->
                <table class="horaire" >
                  <tbody>
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Monday">Lundi</td>
                    
                    <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                    
                  </tr>
                  

                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Tuesday">Mardi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Wednesday">Mercredi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Thursday">Jeudi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>    
                                            
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Friday">Vendredi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>                         
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Saturday">Samedi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                           </tr>          
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Sunday">Dimanche</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                           </tr>            
                                          </tbody>
                    <!-- <tr> -->
                        <!-- <td> -->
                            <!-- Lundi -->
                        <!-- </td> -->
                        <!-- <td> -->
                            <!-- 8h->18h -->
                        <!-- </td> -->
                        
                    <!-- </tr> -->
                </table>
                
                </div> 
         
                <div class="custom-select" style="width:200px;z-index: 1;position:fixed;margin-left: 60%;background-color:white">
    <table style="background-color:white" >
   
    <h4 style="margin-left: 22%;margin-top:20px;color:red;" >Liste magasin :</h4>
   <?php
				foreach($listemagasins as $magasin){
			?>
    <tr>
        <td>
              <a style="margin-left: 60%" href="affichermagasin.php?id_magasin=<?php echo $magasin['id_magasin']; ?>">
                 <?php echo $magasin['nom_magasin']; ?>
                </a>
            
            </td>
  
       
       
        <?php
				}
			?>
             </table>
   <!-- <table >
    <option value="0" class=choisir_police>Choisir un magasin:</option>
   <?php
			//	foreach($listemagasins as $magasin){
			?>
    <tr>
             <td>
              <a href="affichermagasin.php?id_magasin=<?php //echo $magasin['id_magasin']; ?>">
                 <?php// echo $magasin['nom_magasin']; ?>
             </a>
             </td>
            
          
                    </tr>
                    
          
       
        <?php
			//	}
			?>
             </table>-->
    </div> 
   
</div>
<?php
				}
		
			else{
				$magasin = $magasinC->recuperermagasin(2);
                
                
				
		?>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.0059655165546!2d10.16108131524885!3d36.84233317993991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd333723654b7b%3A0xb34ea783a7c8880f!2sManar%20City!5e0!3m2!1sfr!2stn!4v1649798327407!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
<div class="card">
            <div class="elem" style="background-color: white" >
                <h2 class="h">
                <?php echo $magasin['nom_magasin']; ?>
                
 
                </h2>
                <h1 class=h>
                <?php echo $magasin['adresse_magasin']; ?>
                </h1>
                

                <i href="tel:<?php echo $magasin['tel_magasin']; ?>" class="buton" > Call us </i>
                
            </div>

                <div class="elem" style="background-color:rgb(247, 247, 247);">
                2
                <h2 class="h" style="margin-top: 4%;">Horaires</h2>
               <!-- <li id="horaire"> -->
                    <!-- <h4 class="h"> -->
                        <!-- Lundi 8h->18h -->
                    <!-- </h4> -->
                    
                <!-- </li> -->
                <table class="horaire" >
                  <tbody>
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Monday">Lundi</td>
                    
                    <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                    
                  </tr>
                  

                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Tuesday">Mardi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Wednesday">Mercredi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Thursday">Jeudi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>    
                                            
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Friday">Vendredi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                            </tr>                         
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Saturday">Samedi</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                           </tr>          
                  <tr itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
                    <td itemprop="dayOfWeek" href="http://schema.org/Sunday">Dimanche</td>
                                              <td><time itemprop="opens" content="10:00 am">10:00</time>-<time itemprop="closes" content="9:00 pm">21:00</time></td>
                                           </tr>            
                                          </tbody>
                    <!-- <tr> -->
                        <!-- <td> -->
                            <!-- Lundi -->
                        <!-- </td> -->
                        <!-- <td> -->
                            <!-- 8h->18h -->
                        <!-- </td> -->
                        
                    <!-- </tr> -->
                </table>
                
                </div> 
         
    <div class="custom-select" style="width:200px;z-index: 1;position:fixed;margin-left: 60%;background-color:white">
    <table style="background-color:white" >
   
    <h4 style="margin-left: 22%;margin-top:20px;color:red;" >Liste magasin :</h4>
   <?php
				foreach($listemagasins as $magasin){
			?>
    <tr>
        <td>
              <a style="margin-left: 60%" href="affichermagasin.php?id_magasin=<?php echo $magasin['id_magasin']; ?>">
                 <?php echo $magasin['nom_magasin']; ?>
                </a>
            
            </td>
  
       
       
        <?php
				}
			?>
             </table>
    </div> 
   
</div>
<?php
				}
			?>
</body>

<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    </script>
    <i class="cis-phone"></i>

    
</html>