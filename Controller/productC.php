<?php
	include_once 'C:\xampp\htdocs\sp\config2.php';
	include_once 'C:/xampp/htdocs/sp/Model/product.php';
	class productC {

		function afficherproduit($search = ''){
			$db = config2::getConnexion();
			$totalPages = 0;
			if ($search === "") {
				$perPage = 3;
				$stmt = $db->prepare("SELECT COUNT(*) from `product`");
				$stmt->execute();
				$entries = $stmt->fetchColumn();
				$totalPages = ceil($entries / $perPage);

				$pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
				$x = ($pageNow - 1) * $perPage;
				$y = $perPage;
				$sql="SELECT * FROM product LIMIT $x, $y";
			}  else {
				
				//$sql="SELECT * FROM product where nom LIKE '%" . $search . "%'";
				$sql="SELECT * FROM product where id LIKE '%" . $search . "%' OR nom LIKE '%" . $search . "%' OR prix LIKE '%" . $search . "%' OR quantite LIKE '%" . $search . "%'";
			}
			try{
				$liste = $db->query($sql);
				return array($liste, $totalPages);
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function afficherproduitsTri($order, $by, $type){
			$db = config2::getConnexion();
			// $totalPages = 0;
			 $perPage = 2;
			 $stmt = $db->prepare("SELECT COUNT(*) from `product`");
			 $stmt->execute();
			 $entries = $stmt->fetchColumn();
			 $totalPages = ceil($entries / $perPage);

			 $pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
			 $x = ($pageNow - 1) * $perPage;
			 $y = $perPage;
			

			if ($order == false) {
				$sql="SElECT * From product LIMIT $x, $y";
			} else {
				$sql="SELECT * FROM product order by $by $type LIMIT $x, $y ";
			}

			try{
				$liste = $db->query($sql);
				return array($liste, $totalPages);
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerproduit($id){
			$sql="DELETE FROM product WHERE id=:id";
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
		function ajouterproduit($produit){
			$sql="INSERT INTO product (nom, prix, quantite, img) 
			VALUES (:nom,:prix, :quantite, :img)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $produit->getnom(),
					'prix' => $produit->getprix(),
					'quantite' => $produit->getquantite(),
					'img' => $produit->getimg(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererproduit($id){
			$sql="SELECT * from product where id=$id";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierproduit($produit, $id){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					"UPDATE product SET 
						nom= :nom,
						img= :img,
						prix= :prix
					WHERE id= :id"
				);
				$query -> bindValue(':id',$id);
				$query->execute([
					
					'id' => $id,
					'nom' => $produit->getnom(),
					'img' => $produit->getimg(),
					'prix' => $produit->getprix()
				]);
				echo $query->rowCount() . " product UPDATED successfully <br>";
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