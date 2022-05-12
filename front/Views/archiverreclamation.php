<?php
	include '../Controller/reclamationC.php';
	$reclamationC=new reclamationC();
	$reclamationC->archivereclamation($_GET["id_rec"]);
	header('Location:afficherListereclamations.php');
?>