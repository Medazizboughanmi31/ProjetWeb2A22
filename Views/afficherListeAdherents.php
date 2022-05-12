<?php
	include_once '../Model/magasin.php';
	include_once '../Controller/magasinC.php';
	
	$magasinC=new magasinC();
	$listemagasins=$magasinC->affichermagasins(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajoutermagasin.php">Ajouter un magasin</a></button>
		<center><h1>Liste des magasins</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_magasin</th>
				<th>nom_magasin</th>
				<th>adresse_magasin</th>
				<th>tel_magasin</th>
				<th>localisation_map</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listemagasins as $magasin){
			?>
			<tr>
				<td><?php echo $magasin['id_magasin']; ?></td>
				<td><?php echo $magasin['nom_magasin']; ?></td>
				<td><?php echo $magasin['adresse_magasin']; ?></td>
				<td><?php echo $magasin['tel_magasin']; ?></td>
				<td><?php echo $magasin['localisation_map']; ?></td>
				<td>
					<form method="POST" action="modifiermagasin.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $magasin['id_magasin']; ?> name="id_magasin">
					</form>
				</td>
				<td>
					<a href="supprimermagasin.php?id_magasin=<?php echo $magasin['id_magasin']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
