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
            $reclamationC->modifierreclamation($reclamation, $_POST["id_rec"]);
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
</head>
    <body>
        <button><a href="afficherListereclamations.php">Retour à la liste des reclamations</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id_rec'])){
				$reclamation = $reclamationC->recupererreclamation($_POST['id_rec']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_rec">Numéro reclamation:
                        </label>
                    </td>
                    <td><input type="text" name="id_rec" id="id_rec" value="<?php echo $reclamation['id_rec']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="date_rec">date_rec:
                        </label>
                    </td>
                    <td><input type="text" name="date_rec" id="date_rec" value="<?php echo $reclamation['date_rec']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_user">id_user:
                        </label>
                    </td>
                    <td><input type="text" name="id_user" id="id_user" value="<?php echo $reclamation['id_user']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="objet">objet:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="objet" value="<?php echo $reclamation['objet']; ?>" id="objet">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="detail">objet mail:
                        </label>
                    </td>
                    <td>
                        <input type="detail" name="detail" id="detail" value="<?php echo $reclamation['detail']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date d'inscription:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="etat" id="etat" value="<?php echo $reclamation['etat']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>