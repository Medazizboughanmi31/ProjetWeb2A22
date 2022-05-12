<?php
	include 'C:/xampp/htdocs/sp/config2.php';
	include_once 'C:/xampp/htdocs/sp/Model/cart.php';
	class cartC {
		function afficherPanier(){
			$sql="SELECT * FROM cart";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerDuPanier($id){
			$sql="DELETE FROM cart WHERE id=:id";
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

	
		function ajouterDansPanier($cart){
			$sql="INSERT INTO cart (id_p, id_u, id_c, quantity ) 
			VALUES (:id_p,:id_u, :id_c, :quantite)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_p' => $cart->getid_p(),
					'id_u' => $cart->getid_u(),
					'id_c' => $cart->getid_c(),
					'quantite' => $cart->getquantity()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recuperercart($id){
			$sql="SELECT * from cart where id=$id";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$cart=$query->fetch();
				return $cart;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function viderPanier($id){
			$sql="SELECT * from cart where id_u=$id";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$cart=$query->fetch();
				return $cart;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		 function modifiercart($id_u, $id_c){
		 	try {
		 		$db = config2::getConnexion();
		 		$query = $db->prepare(
		 			"UPDATE cart SET 
		 				id_c= :id_c,
		 			WHERE id_u= :id_u"
		 		);
		 		$query -> bindValue(':id_c',$id_c);
		 		$query->execute([
					
		 			'id_u' => $id_u,
		 			'id_c' => $id_c,

		 		]);
		 		echo $query->rowCount() . " cart UPDATED successfully <br>";
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