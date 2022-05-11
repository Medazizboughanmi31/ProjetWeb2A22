
<?php
    include_once 'C:\xampp\htdocs\Crud_livraison\Model\livraison.php';
    include_once 'C:\xampp\htdocs\Crud_livraison\Controller\livraisonC.php';
    include_once
    $error = "";

    // create product
    $livraison = null;

    // create an instance of the controller
    $livraisonC = new livraisonC();
  

	

    if (
		    isset($_POST["prenom_lv"]) &&
        isset($_POST["nom_lv"]) && 
        isset($_POST["adrm_lv"])&& 
        isset($_POST["mdp_lv"])&& 
        isset($_POST["numt_lv"])&& 
        isset($_POST["pays_lv"])&& 
        isset($_POST["ville_lv"])&&
        isset($_POST["adr_lv"])&&
        isset($_POST["cp_lv"])

    ) {
        if (
            !empty($_POST["prenom_lv"]) &&
            !empty($_POST["nom_lv"]) && 
            !empty($_POST["adrm_lv"])&& 
            !empty($_POST["mdp_lv"])&& 
            !empty($_POST["numt_lv"])&&
            !empty($_POST["pays_lv"])&& 
            !empty($_POST["ville_lv"])&&
            !empty($_POST["adr_lv"])&&
            !empty($_POST["cp_lv"])
        ) {
            $livraison = new livraison(         
            $_POST["prenom_lv"],
            $_POST["nom_lv"],
            $_POST["adrm_lv"],
            $_POST["mdp_lv"],
            $_POST["numt_lv"],
            $_POST["pays_lv"],
            $_POST["ville_lv"],
            $_POST["adr_lv"],
            $_POST["cp_lv"]

            );
            $livraisonC->ajouterlivraison($livraison);
            header('Location:Gestion_Livraison.php');
        }
        else
            $error = "Missing information";
    }  
?>


<!DOCTYPE html>
<html>
<head>
	<title>How to Design Login & Registration Form Transition</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<div ref="error">
     <?php echo $error; ?>
   </div>
   <form action="" class="form-material" method="POST">
  <div class="cont">
    <div class="form sign-in">
      <h2>Formulaire de livraison</h2>
      <label>
        <span>Prenom</span>
        <input type="text" name="Prenom">
      </label>
      <label>
        <span>Nom</span>
        <input type="text" name="Nom">
      </label>
      <label>
        <label>
          <span>Adresse Mail</span>
          <input type="email" name="Adresse Mail">
        </label>
        <label>
          <span>Mot de passe</span>
          <input type="text" name="Mot de passe">
        </label>
        <label>
          <span>Numero de telephone</span>
          <input type="text" name="Numéro de téléphone">
        </label>
    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Next step</span>
          <span class="m-in">Return</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Passer une livraison</h2>
        <label>
          <span>Pays</span>
          <input type="text" name="Pays">
        </label>
        <label>
          <span>Ville</span>
          <input type="text" name="Ville">
        </label>
        <label>
          <span>Adresse</span>
          <input type="text" name="Adresse">
        </label>
        <label>
          <span>Zip / Code Postal</span>
          <input type="text" name="Zip / Code Postal">
        </label>
        <button type="button" class="submit"><a href="file:///C:/Users/21655/Downloads/my_snippets-master/my_snippets-master/test/index.html">Termine !</a></button>
      </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
  </form>
</body>
</html>