<?php
	include '../Controller/reclamationC.php';
	$reclamationC=new reclamationC();
	$reclamationC->supprimereclamation($_GET["id_rec"]);
	header('Location:afficherListereclamations.php');
?>