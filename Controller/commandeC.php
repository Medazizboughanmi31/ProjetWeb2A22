<?php
	include 'C:/xampp/htdocs/sp/config2.php';
	include_once 'C:/xampp/htdocs/sp/Model/commande.php';
	class commandeC {
		function affichercommande($search = ""){
			$db = config2::getConnexion();
			$totalPages = 0;
			if ($search === "") {
				$perPage = 3;
				$stmt = $db->prepare("SELECT COUNT(*) from `commande`");
				$stmt->execute();
				$entries = $stmt->fetchColumn();
				$totalPages = ceil($entries / $perPage);

				$pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
				$x = ($pageNow - 1) * $perPage;
				$y = $perPage;
				$sql="SELECT * FROM commande LIMIT $x, $y";
			}  else {
				
				$sql="SELECT * FROM commande where id LIKE '%" . $search . "%' OR id_u LIKE '%" . $search . "%' OR quantity LIKE '%" . $search . "%' or price LIKE '%" . $search . "%'";
			}
			try{
				$liste = $db->query($sql);
				return array($liste, $totalPages);

			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function affichercommandeTri($order, $by, $type){
			$db = config2::getConnexion();
			// $totalPages = 0;
			 $perPage = 2;
			 $stmt = $db->prepare("SELECT COUNT(*) from `commande`");
			 $stmt->execute();
			 $entries = $stmt->fetchColumn();
			 $totalPages = ceil($entries / $perPage);

			 $pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
			 $x = ($pageNow - 1) * $perPage;
			 $y = $perPage;
			

			if ($order == false) {
				$sql="SElECT * From commande LIMIT $x, $y";
			} else {
				$sql="SELECT * FROM commande order by $by $type LIMIT $x, $y ";
			}

			try{
				$liste = $db->query($sql);
				return array($liste, $totalPages);
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function supprimercommande($id){
			$sql="DELETE FROM commande WHERE id=:id";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutercommande($commande){
			$sql="INSERT INTO commande ( id_u, quantity, price ) 
			VALUES (:id_u, :quantite, :price)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					// 'id' => $commande->getid(),
					'id_u' => $commande->getid_u(),
					'quantite' => $commande->getquantity(),
					'price' => $commande->getprice()
				]);		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recuperercommande($id){
			$sql="SELECT * from commmande where id=$id";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$commande=$query->fetch();
				return $commande;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererDerniereCommande(){
			$sql="SELECT id FROM commande WHERE id = (SELECT MAX(id) FROM commande)";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$commande=$query->fetch();
				return $commande;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercommande($commande, $id){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					"UPDATE commande SET 
						quantite= :quantite
					WHERE id= :id"
				);
				$query -> bindValue(':id',$id);
				$query->execute([
					
					'quantite' => $cart->getquantite()
				]);
				echo $query->rowCount() . " commande UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


// 		function trierlivraison()
//  		{
//      $sql = "SELECT * from livraison ORDER BY ref_lv DESC";
//      $db = config2::getConnexion();
//      try {
//          $req = $db->query($sql);
//          return $req;
//      } 
//      catch (Exception $e)
//       {
//          die('Erreur: ' . $e->getMessage());
//      }
 
 
 
//  }

	}
?>