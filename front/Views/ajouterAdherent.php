<?php
    include_once '../Model/reclamation.php';
    include_once '../Controller/reclamationC.php';
   $error = "";
   // create reclamation
    $reclamation = null;
   // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        isset($_POST["id_rec"]) &&
		isset($_POST["date_rec"]) &&		
        isset($_POST["id_user"]) &&
		isset($_POST["objet"]) && 
        isset($_POST["detail"]) && 
        isset($_POST["etat"])
    ) {
        if (
            !empty($_POST["id_rec"]) && 
			!empty($_POST['date_rec']) &&
            !empty($_POST["id_user"]) && 
			!empty($_POST["objet"]) && 
            !empty($_POST["detail"]) && 
            !empty($_POST["etat"])
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="about studio, Client Reviews, Client Reviews, Client Reviews, Client Reviews, Client Reviews, Client Reviews">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Contact</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
	</head>
</head>
    <body>
        <a href="afficherListereclamations.php" style="margin:1em;" class="u-border-2 u-border-hover-palette-5-dark-1 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-5-dark-1 u-palette-4-base u-radius-5 u-text-body-alt-color u-text-hover-white u-btn-3">Retour à la liste des reclamations</a>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table align="center">
                <tr>
                    <td>
                        <label for="id_rec">Numéro reclamation:
                        </label>
                    </td>
                    <td><input type="text" name="id_rec" id="id_rec" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="date_rec">date_rec:
                        </label>
                    </td>
                    <td><input type="text" name="date_rec" id="date_rec" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_user">id_user:
                        </label>
                    </td>
                    <td><input type="text" name="id_user" id="id_user" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="objet">objet:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="objet" id="objet">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="detail">objet mail:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="detail" id="detail">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date d'inscription:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="etat" id="etat" >
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>