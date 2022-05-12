<?php
	include '../Controller/magasinC.php';
	$magasinC=new magasinC();
	$magasinC->supprimermagasin($_GET["id_magasin"]);
	header('Location:affichermagasin.php');
?>