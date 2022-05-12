<?php
	require_once( '../config.php');
	require_once( '../Model/message.php');
    
	class messageC {
		function affichermessages($id_rec){
			$sql="SELECT * FROM message WHERE id_rec=$id_rec ";

			$db = config::getConnexion();
			
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimermessage($id_message){
			$sql="DELETE FROM message WHERE id_message=:id_message";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_message', $id_message);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutermessage($message){
			$sql="INSERT INTO message ( id_user, detail, id_rec) 
			VALUES (:id_user, :detail,:id_rec)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_user' => $message->getid_user(),
					'detail' => $message->getdetail(),
					'id_rec' => $message->getid_rec()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperermessage($id_message){
			$sql="SELECT * from message where id_message=$id_message";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$message=$query->fetch();
				return $message;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiermessage($message, $id_message){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE message SET 
						date_message= :date_message, 
						id_user= :id_user, 
						detail= :detail, 
						id_rec= :id_rec
					WHERE id_message= :id_message'
				);
				$query->execute([
					'date_message' => $message->getdate_message(),
					'id_user' => $message->getid_user(),
					'detail' => $message->getdetail(),
					'id_rec' => $message->getid_rec(),
					'id_message' => $id_message
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>