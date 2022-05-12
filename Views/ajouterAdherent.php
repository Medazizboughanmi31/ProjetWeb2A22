<?php
    include_once '../Model/magasin.php';
    include_once '../Controller/magasinC.php';

    $error = "";

    // create magasin
    $magasin = null;

    // create an instance of the controller
    $magasinC = new magasinC();
    if (
        isset($_POST["id_magasin"]) &&
		isset($_POST["nom_magasin"]) &&		
		isset($_POST["adresse_magasin"]) && 
        isset($_POST["tel_magasin"]) && 
        isset($_POST["localisation_map"])
    ) {
        if (
            !empty($_POST["id_magasin"]) && 
			!empty($_POST['nom_magasin']) &&
			!empty($_POST["adresse_magasin"]) && 
            !empty($_POST["tel_magasin"]) && 
            !empty($_POST["localisation_map"])
        ) {
            $magasin = new magasin(
                $_POST['id_magasin'],
				$_POST['nom_magasin'], 
				$_POST['adresse_magasin'],
                $_POST['tel_magasin'],
                $_POST['localisation_map']
            );
            $magasinC->ajoutermagasin($magasin);
            header('Location:affichermagasin.php');
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
        <button><a href="affichermagasin.php">Retour au home</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_magasin">id_magasin:
                        </label>
                    </td>
                    <td><input type="text" name="id_magasin" id="id_magasin" maxlength="20" style="display:"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom_magasin">nom_magasin:
                        </label>
                    </td>
                    <td><input type="text" name="nom_magasin" id="nom_magasin" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse_magasin">adresse_magasin:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse_magasin" id="adresse_magasin">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel_magasin"> tel_magasin:
                        </label>
                    </td>
                    <td>
                        <input type="tel_magasin" name="tel_magasin" id="tel_magasin">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="localisation_map">Localisation:
                        </label>
                    </td>
                    <td>
                        <input type="localisation_map" name="localisation_map" id="localisation_map" style="display:none;" >
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Ajouter"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>