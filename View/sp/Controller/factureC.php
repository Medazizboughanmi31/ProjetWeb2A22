<?php
	include 'C:/xampp/htdocs/sp/config.php';
	include_once 'C:/xampp/htdocs/sp/Model/facture.php';
	class factureC {
		function afficherfacture(){
			$sql="SELECT * FROM facture";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerfacture($cin_fa){
			$sql="DELETE FROM facture WHERE cin_fa=:cin_fa";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':cin_fa', $cin_fa);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterfacture($facture){
			$sql="INSERT INTO facture (cin_fa,date_fa,rf_fa,ad_fa,ntel_fa,adm_des,des_fa,qu_fa,pru_fa,tot_fa,tax_fa,totf_fa) 
			VALUES (:cin_fa,:date_fa,:rf_fa,:ad_fa,:ntel_fa,:adm_des,:des_fa,:qu_fa,:pru_fa,:tot_fa,:tax_fa,:totf_fa)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'cin_fa' => $facture->get_cin(),
					'date_fa' => $facture->getdate(),
					'rf_fa' => $facture->getrf(),
					'ad_fa' => $facture->getad(),
                    'ntel_fa'=> $facture-> getntel(),
                    'adm_des'=> $facture->getadm(),
					'des_fa'=> $facture->getdes(),
                    'qu_fa'=> $facture->getqu(),
					'pru_fa'=> $facture->getpru(),
					'tot_fa'=> $facture->gettot(),
					'tax_fa'=> $facture->gettax(),
					'totf_fa'=> $facture->gettotf()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererfacture($cin_fa){
			$sql="SELECT * from facture where cin_fa=$cin_fa";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$facture=$query->fetch();
				return $facture;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierfacture($facture, $cin_fa){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE facture SET 
					 	date_fa= :date_fa,
					 	rf_fa= :rf_fa,
					 	ad_fa= :ad_fa,
					 	ntel_fa= :ntel_fa,
					 	adm_des= :adm_des,
					 	des_fa= :des_fa,
					 	qu_fa= :qu_fa,
					 	pru_fa= :pru_fa,
					 	tot_fa= :tot_fa,
					 	tax_fa= :tax_fa,
					 	totf_fa= :totf_fa
					 WHERE cin_fa= :cin_fa'
					

				);
				$query -> bindValue(':cin_fa',$cin_fa);
				$query->execute([
					'cin_fa' => $cin_fa,
					'date_fa' => $facture->getdate(),
					'rf_fa' => $facture->getrf(),
					'ad_fa' => $facture->getad(),
                    'ntel_fa'=> $facture-> getntel(),
                    'adm_des'=> $facture->getadm(),
					'des_fa'=> $facture->getdes(),
                    'qu_fa'=> $facture->getqu(),
					'pru_fa'=> $facture->getpru(),
					'tot_fa'=> $facture->gettot(),
					'tax_fa'=> $facture->gettax(),
					'totf_fa'=> $facture->gettotf()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>