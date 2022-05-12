<?php
	include '../Controller/userC.php';
	$userC=new userC();
	$userC->supprimeruser($_GET["id"]);
	header('Location:view.php');
?>