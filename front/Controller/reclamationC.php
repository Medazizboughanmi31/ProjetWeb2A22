<?php
	include_once '../config.php';
	include_once '../Model/reclamation.php';
	class reclamationC {
		function afficherreclamations($id_user,$etat){
			$sql="SELECT * FROM reclamation where id_user=$id_user AND etat=$etat";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimereclamation($id_rec){
			$sql="DELETE FROM reclamation WHERE id_rec=:id_rec";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_rec', $id_rec);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		function archivereclamation($id_rec){
			$sql="UPDATE reclamation SET etat='1' WHERE id_rec=:id_rec";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_rec', $id_rec);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterreclamation($reclamation){
			$sql="INSERT INTO reclamation (id_user, objet, detail) 
			VALUES (:id_user, :objet,:detail)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_user' => $reclamation->getId_user(),
					'objet' => $reclamation->getObjet(),
					'detail' => $reclamation->getDetail()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreclamation($id_rec){
			$sql="SELECT * from reclamation where id_rec=$id_rec";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reclamation=$query->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreclamation($reclamation, $id_rec){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						date_rec= :date_rec, 
						id_user= :id_user, 
						objet= :objet, 
						detail= :detail, 
						etat= :etat
					WHERE id_rec= :id_rec'
				);
				$query->execute([
					'date_rec' => $reclamation->getDate_rec(),
					'id_user' => $reclamation->getId_user(),
					'objet' => $reclamation->getObjet(),
					'detail' => $reclamation->getDetail(),
					'etat' => $reclamation->getEtat(),
					'id_rec' => $id_rec
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>