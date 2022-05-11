<?php
	include 'D:/xampp/htdocs/G.Events/config.php';
	include_once 'D:/xampp/htdocs/G.Events/Model/ticktes.php';
	
	class ticktesC {
		function afficherticktes(){
			$sql="SELECT * FROM ticktes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherticktesByEvent(){
			$sql="SELECT *
			FROM ticktes
			INNER JOIN events
			WHERE ticktes.id3_ev = events.id_ev" ;
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerticktes($id_tk){
			$sql="DELETE FROM ticktes WHERE id_tk=:id_tk ";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_tk', $id_tk);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterticktes($ticktes){
			$sql="INSERT INTO ticktes (id_tk,name_tk,mail_tk,type_tk,id3_ev) 
			VALUES (:id_tk,:name_tk,:mail_tk,:type_tk,:id3_ev)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_tk' => $ticktes->getid(),
					'name_tk' => $ticktes->getNom(),
					'mail_tk' => $ticktes->getEmail(),
                    'type_tk'=> $ticktes-> gettype(),
                    'id3_ev'=> $ticktes->getid_ev()
                

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererticktes($id_tk){
			$sql="SELECT * from ticktes where id_tk=$id_tk";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$ticktes=$query->fetch();
				return $ticktes;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierticktes($ticktes, $id_tk){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE ticktes SET 
						id_tk= :id_tk,
						name_tk= :name_tk,
						mail_tk= :mail_tk,
						type_tk= :type_tk,
						id3_ev= :id3_ev
						
						
					WHERE id_tk= :id_tk'
				);
				$query->execute([
					
					'id_tk' =>$ticktes->getid(),
					'name_tk' => $ticktes->getNom(),
					'mail_tk' => $ticktes->getEmail(),
                    'type_tk'=> $ticktes-> gettype(),
                    'id3_ev'=> $ticktes->getid_ev()
                  
					
					

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function trierticktesDESC()
		{
		$sql = "SELECT * from ticktes ORDER BY id_tk DESC";
		$db = config::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function trierticktesASC()
		{
		$sql = "SELECT * from ticktes ORDER BY id_tk ASC";
		$db = config::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
	    }

		function getticktes($id){
            $sql="SELECT * from ticktes where id_tk= $id";
            $db = config2::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $events=$query->fetch();
                return $ticktes;
            } 
            catch (Exception $e){
                die('error: '.$e->getMessage());
            }
        }


	}
?>