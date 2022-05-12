<?php
	include '../Controller/AdherentC.php';
	$adherentC=new AdherentC();
	$listeAdherents=$adherentC->afficheradherents(); 
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
	   <a href="ajouterAdherent.php"  style="margin:1em;" class="u-border-2 u-border-hover-palette-5-dark-1 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-5-dark-1 u-palette-4-base u-radius-5 u-text-body-alt-color u-text-hover-white u-btn-3">Ajouter un Adherent</a>
		<center><h1>Liste des adherents</h1></center>
    <div class="u-expanded-width u-table u-table-responsive u-table-1">
		<table border="1" align="center" >
    <thead class="u-align-center u-palette-5-light-2 u-table-header u-table-header-1">
    <tr >
				<th>NumAdherent</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Adresse</th>
				<th>Email</th>
				<th>DateInscription</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
      </thead>
      <tbody class="u-align-center u-table-body">
			<?php
				foreach($listeAdherents as $adherent){
			?>
	<tr style="height: 78px;">
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $adherent['NumAdherent']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $adherent['Nom']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $adherent['Prenom']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $adherent['Adresse']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $adherent['Email']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell"><?php echo $adherent['DateInscription']; ?></td>
				<td class="u-border-1 u-border-palette-5-light-1 u-table-cell">
					<form method="POST" action="modifieradherent.php">
						<input type="submit" name="Modifier" value="Modifier"  style="padding:0.8em 2em; margin:1em 0 0 0;" class="u-border-2 u-border-hover-palette-5-dark-1 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-5-dark-1 u-palette-4-base u-radius-5 u-text-body-alt-color u-text-hover-white u-btn-3">
						<input type="input" value=<?PHP echo $adherent['NumAdherent']; ?> name="NumAdherent" style="display:none;">
					</form>
				</td>
        <td class="u-border-1 u-border-palette-5-light-1 u-table-cell">
					<a href="supprimeradherent.php?NumAdherent=<?php echo $adherent['NumAdherent']; ?>"  class="u-border-2 u-border-hover-palette-5-dark-1 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-5-dark-1 u-palette-4-base u-radius-5 u-text-body-alt-color u-text-hover-white u-btn-3" >Supprimer</a>
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
