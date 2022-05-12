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
            $magasinC->modifiermagasin($magasin, $_POST["id_magasin"]);
            header('Location:affichermagasin.php');
        }
        else
            $error = "Missing information";
    }    
    ?>
<html lang="en">
<head>
<style>
body{
    background-image:url('https://cdn.britannica.com/35/222035-050-C68AD682/makeup-cosmetics.jpg');
}
 
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2aa;}

#customers tr:nth-child(odd){background-color:#f6f6f6aa;}

#customers tr:hover {background-color: #dddddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
#container{position:absolute;
    width:50%;
left:25%;
}
input{margin:0;
    width:100%;
    height:100%;
    
}
tr{padding:0;}

</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="affichermagasin.php">Retour à la liste des magasins</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id_magasin'])){
				$magasin = $magasinC->recuperermagasin($_POST['id_magasin']);
				
		?>
        
        <form action="" method="POST">
            <div id="container">
<table align="center" id="customers" >
                
                <input type="text" name="id_magasin" id="id_magasin" value="<?php echo $magasin['id_magasin']; ?>" maxlength="20" style="display:none">
                
				<tr>
                    <td>
                        <label for="nom_magasin">nom_magasin:
                        </label>
                    </td>
                    <td><input type="text" name="nom_magasin" id="nom_magasin" value="<?php echo $magasin['nom_magasin']; ?>" maxlength="20"></td>
                </tr>
                
                    
        
                <tr>
                    <td>
                        <label for="adresse_magasin">adresse_magasin:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse_magasin" value="<?php echo $magasin['adresse_magasin']; ?>" id="adresse_magasin">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel_magasin">tel_magasin:
                        </label>
                    </td>
                    <td>
                        <input type="tel_magasin" name="tel_magasin" id="tel_magasin" value="<?php echo $magasin['tel_magasin']; ?>">
                    </td>
                </tr>
                
                <tr>
                <input type="text" name="localisation_map" id="localisation_map" style="display:none;"value="50"> 
                    <td></td>
                    <td>
                        <input type="submit" style="color:white;background:black;border:0;padding:1em 0;  border-radius: 50px;" value="Modifier">
                    </td>
                    <td>
                        <input type="reset" value="Annuler" style="color:white;background:black;border:0;padding:1em 4em;  border-radius: 50px;">
                    </td>
                </tr>
            </table>
            </div>
        </form>
		<?php
		}
		?>
    </body>
</html>