<?php
	include 'C:/xampp/htdocs/sp/config2.php';
	include_once 'C:/xampp/htdocs/sp/Model/livraison.php';
	class livraisonC {
		function afficherlivraison(){
			$sql="SELECT * FROM livraison";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerlivraison($ref){
			$sql="DELETE FROM livraison WHERE ref_lv=:ref_lv";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ref_lv', $ref);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterlivraison($livraison){
			$sql="INSERT INTO livraison (ref_lv,pre_lv,nom_lv,adrm_lv,mdp_lv,num_lv,pays_lv,ville_lv,adr_lv,cp_lv,tlp) 
			VALUES (:ref_lv,:pre_lv,:nom_lv,:adrm_lv,:mdp_lv,:num_lv,:pays_lv,:ville_lv,:adr_lv,:cp_lv,:tlp)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'ref_lv' => $livraison->get_ref(),
					'pre_lv' => $livraison->getpre(),
					'nom_lv' => $livraison->getnom(),
					'adrm_lv' => $livraison->getadrm(),
                    'mdp_lv'=> $livraison-> getmdp(),
                    'num_lv'=> $livraison->getnum(),
					'pays_lv'=> $livraison->getpays(),
                    'ville_lv'=> $livraison->getville(),
					'adr_lv'=> $livraison->getadr(),
					'cp_lv'=> $livraison->getcp(),
					'tlp'=> $livraison->gettlp()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererlivraison($ref){
			$sql="SELECT * from livraison where ref_lv=$ref";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$livraison=$query->fetch();
				return $livraison;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierlivraison($livraison, $ref){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					"UPDATE livraison SET 
						ref_lv= :ref_lv,
						pre_lv= :pre_lv,
						nom_lv= :nom_lv,
						adrm_lv= :adrm_lv,
						mdp_lv= :mdp_lv,
						num_lv= :num_lv,
						pays_lv= :pays_lv,
						ville_lv= :ville_lv,
						adr_lv= :adr_lv,
						cp_lv= :cp_lv,
						tlp= :tlp
					WHERE ref_lv= :ref_lv"
				);
				$query -> bindValue(':ref_lv',$ref);
				$query->execute([
					
					'ref_lv' => $ref,
					'pre_lv' => $livraison->getpre(),
					'nom_lv' => $livraison->getnom(),
					'adrm_lv' => $livraison->getadrm(),
                    'mdp_lv'=> $livraison-> getmdp(),
                    'num_lv'=> $livraison->getnum(),
					'pays_lv'=> $livraison->getpays(),
                    'ville_lv'=> $livraison->getville(),
					'adr_lv'=> $livraison->getadr(),
					'cp_lv'=> $livraison->getcp(),
					'tlp'=> $livraison->gettlp()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


		function trierlivraison()
 		{
     $sql = "SELECT * from livraison ORDER BY ref_lv DESC";
     $db = config2::getConnexion();
     try {
         $req = $db->query($sql);
         return $req;
     } 
     catch (Exception $e)
      {
         die('Erreur: ' . $e->getMessage());
     }
 
 
 
 }

	}
?>