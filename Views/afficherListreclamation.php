<?php
	include '../Controller/reclamationC.php';
	$reclamationC=new reclamationC();
	$listereclamations=$reclamationC->afficherreclamations(); 
?>
<html>
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
    
    
    
    
	</head>
	<body>
	   <a href="ajouterreclamation.php"  style="margin:1em;" class="u-border-2 u-border-hover-palette-5-dark-1 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-5-dark-1 u-palette-4-base u-radius-5 u-text-body-alt-color u-text-hover-white u-btn-3">Ajouter un reclamation</a>
		<center><h1>Liste des reclamations</h1></center>
    <div class="u-expanded-width u-table u-table-responsive u-table-1">
		<table border="1" align="center" >
    <thead class="u-align-center u-palette-5-light-2 u-table-header u-table-header-1">
    <tr >
				<th>id_rec</th>
				<th>date_rec</th>
				<th>id_user</th>
				<th>objet</th>
				<th>detail</th>
				<th>etat</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
      </thead>
      <tbody class="u-align-center u-table-body">
			<?php
				foreach($listereclamations as $reclamation){
			?>
	<tr style="height: 78px;">
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $reclamation['id_rec']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $reclamation['date_rec']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $reclamation['id_user']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $reclamation['objet']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $reclamation['detail']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $reclamation['etat']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell">
					<form method="POST" action="modifierreclamation.php">
						<input type="submit" name="Modifier" value="Modifier"  style="padding:0.8em 2em; margin:1em 0 0 0;" class="u-border-2 u-border-hover-palette-5-dark-1 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-5-dark-1 u-palette-4-base u-radius-5 u-text-body-alt-color u-text-hover-white u-btn-3">
						<input type="input" value=<?PHP echo $reclamation['id_rec']; ?> name="id_rec" style="display:none;">
					</form>
				</td>
        <td class="u-border-1 u-border-palette-5-light-1 u-table-cell">
					<a href="supprimerreclamation.php?id_rec=<?php echo $reclamation['id_rec']; ?>"  class="u-border-2 u-border-hover-palette-5-dark-1 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-5-dark-1 u-palette-4-base u-radius-5 u-text-body-alt-color u-text-hover-white u-btn-3" >Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
     </tbody>
		</table>
    </div>
     
	</body>
</html>
