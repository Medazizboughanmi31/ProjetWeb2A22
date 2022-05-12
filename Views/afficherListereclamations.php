<!DOCTYPE html>
<?php
require_once( '../Controller/reclamationC.php');
  require_once('../Controller/messageC.php');
	$reclamationC=new reclamationC();
  $messageC=new messageC();
	$listereclamations=$reclamationC->afficherreclamations(); 
 $listemessages=$messageC->affichermessages(); 
?>
<html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
        <style>
            
            .box{ margin-left: 10%;
               
                width: 80%;display: grid;align-items: center;
                backdrop-filter: blur(10px);
                padding-top: 4em;background-color: rgba(255, 180, 145, 0.527);
            }
            body{

                font-family: "Montserrat", sans-serif;
                background-image: url('https://images.squarespace-cdn.com/content/v1/5d14e8bfa505890001205e37/1622211013212-NRT49RM5Y74D9XIM3DA9/le+blog+%284%29.png');
                background-size: cover;
                background-attachment: fixed;
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
                border-radius: 12px;
            }
           
            b{text-transform:capitalize;
            }
           .glyphicon-pencil,.glyphicon-trash,.glyphicon-plus{
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
              color :gray;
              margin: 0 5em;
          }
                
button{
  position:absolute;
  font-size: large;
right:5%;
align-content: center;
background-color: transparent;
border: 0;
  padding:0%;
  margin:0;
  
}
        </style>

    </head>
<body>

<div class="box">
<dl>
<?php
				foreach($listereclamations as $reclamation){
			?>

  <dt>
  <form method="POST" action="modifierreclamation.php">
						<button type="submit" name="Modifier" > <span class="glyphicon glyphicon-pencil"></span></button>
						<input type="input" value=<?PHP echo $reclamation['id_rec']; ?> name="id_rec" style="display:none;">
					</form>
      <a href="supprimerreclamation.php?id_rec=<?php echo $reclamation['id_rec']; ?>"  style="font-size: large;">
    <span class="glyphicon glyphicon-trash"></span>
  </a><b><?php echo $reclamation['objet']; ?></b><br><p><?php echo $reclamation['detail']; ?></p> <div class="date"><?php echo $reclamation['date_rec']; ?></div></dt>

  <?php
				foreach($listemessages as $message){
          if( $reclamation['id_rec']==$message['id_rec']){
			?>

  <dd><a href="#" style="font-size: large;">
    <span class="glyphicon glyphicon-pencil"></span>
  </a>
      <a href="#" style="font-size: large;">
    <span class="glyphicon glyphicon-trash"></span>
  </a><b>Guest_<?php echo $reclamation['id_user']; ?></b><br><p><?php echo $message['detail']; ?></p> 
<div class="date"><?php echo $message['date_message']; ?></div>
</dd>
<?php
				}}
			?>

  <dd class="add"><center><a href="#" style="font-size: large;">
    <span class="glyphicon glyphicon-plus"></span>
  </a></center></dd>
  <?php
				}
			?>
 </dl>


</div>
</body>
</html>
