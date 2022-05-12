<?php
    include_once '../Model/message.php';
    include_once '../Controller/messageC.php';

    $error = "";

    // create message
    $message = null;

    // create an instance of the controller
    $messageC = new messageC();
    if (
        isset($_POST["id_message"]) &&
		isset($_POST["date_message"]) &&		
        isset($_POST["id_user"]) &&
        isset($_POST["detail"]) && 
        isset($_POST["id_rec"])
    ) {
        if (
            !empty($_POST["id_message"]) && 
			!empty($_POST['date_message']) &&
            !empty($_POST["id_user"]) && 
            !empty($_POST["detail"]) && 
            !empty($_POST["id_rec"])
        ) {
            $message = new message(
                $_POST['id_message'],
				$_POST['date_message'],
                $_POST['id_user'], 
                $_POST['detail'],
                $_POST['id_rec']
            );
            $messageC->modifiermessage($message, $_POST["id_message"]);
            header('Location:afficherListemessages.php');
        }
        else
            $error = "Missing information";
    }    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
        <style>
            
            .box{ margin-left: 10%;
               
                width: 80%;display: fixed;align-items: center;
                backdrop-filter: blur(5px);
                height:50em;
                
            }
            body{

                font-family: "Montserrat", sans-serif;
                background-image: url('https://images.squarespace-cdn.com/content/v1/5d14e8bfa505890001205e37/1622211013212-NRT49RM5Y74D9XIM3DA9/le+blog+%284%29.png');
                background-size: cover;
                background-attachment: fixed;
           
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

<div id="error">
            <?php echo $error; ?>
        </div>
			
		
<div class="box" style="padding-top: 4em;background-color: rgba(255, 180, 145, 0.527);">
<?php
			if (isset($_POST['id_message'])){
				$message = $messageC->recuperermessage($_POST['id_message']);
				
		?>
<form action="" method="POST">

<label for="detail"><b>Detail</b></label>
<textarea id="detail" name="detail"><?php echo $message['detail']; ?></textarea>
  
<div class="but">
<center>
        <button type="submit" value="Modifier" style="padding: 0;"> 
            <span class="glyphicon glyphicon-ok"> Envoyer</span></button>
          </center>
         <center> 
            <button type="submit" value="Modifier"style="padding: 0;"> 
                <span class="glyphicon glyphicon-remove"> Annuler</span></button>
          </center>
          <div style="display: none;">
          <input type="text" name="id_message" id="id_message" value="<?php echo $message['id_message']; ?>" >
          <input type="date" name="date_message" id="date_message" value="<?php echo $message['date_message']; ?>" >
          <input type="text" name="id_user" id="id_user" value="<?php echo $message['id_user']; ?>" >
          <input type="text" name="id_rec" id="id_rec" value="<?php echo $message['id_rec']; ?>">
          </div>
</div>
</form>

<?php
				}
			?>
            </div>
</body>
</html>
