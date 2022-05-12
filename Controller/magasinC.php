<?php
	include '../config.php';
	include_once '../Model/magasin.php';
	class magasinC {
		function affichermagasins(){
			$sql="SELECT * FROM magasin";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimermagasin($id_magasin){
			$sql="DELETE FROM magasin WHERE id_magasin=:id_magasin";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_magasin', $id_magasin);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutermagasin($magasin){
			$sql="INSERT INTO magasin (id_magasin, nom_magasin, adresse_magasin, tel_magasin,localisation_map) 
			VALUES (:id_magasin,:nom_magasin, :dresse_magasin, :tel_magasin,localisation_map)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_magasin' => $magasin->getid(),
					'nom_magasin' => $magasin->getnom(),
					'adresse_magasin' => $magasin->getadresse(),
					'tel_magasin' => $magasin->gettel(),
					'localisation_map'=>$magasin->getlocalisation()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperermagasin($id_magasin){
			$sql="SELECT * from magasin where id_magasin=$id_magasin";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$magasin=$query->fetch();
				return $magasin;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiermagasin($magasin, $id_magasin){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE magasin SET 
						nom_magasin= :nom_magasin, 
						
						adresse_magasin= :adresse_magasin, 
						 
						tel_magasin= :tel_magasin,
						localisation_map=:localisation_map
					WHERE id_magasin= :id_magasin'
				);
				$query->execute([
					'nom_magasin' => $magasin->getnom(),
					'adresse_magasin' => $magasin->getadresse(),
					'tel_magasin' => $magasin->gettel(),
					'id_magasin' => $id_magasin,
					'localisation_map'=>$magasin->getlocalisation()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>