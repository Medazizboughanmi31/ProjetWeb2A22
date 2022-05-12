<?php
	class commande{
        private $id;
		private $id_u;
		private $quantite;
		private $price;
		
		function __construct($id_u, $quantite, $price){
			// $this->id=$id;
			$this->id_u=$id_u;
			$this->quantite=$quantite;
			$this->price=$price;
		}


		// function get_id(){
		// 	return $this->id;
		// }

		// function getid(){
		// 	return $this->id;
		// }
		function getid_u(){
			return $this->id_u;
		}
		function getquantity(){
			return $this->quantite;
		}
		function getprice(){
			return $this->price;
		}
		

		// function setid(string $id){
		// 	$this->id=$id;
		// }
		function setid_u(string $id_u){
			$this->id_u=$id_u;
		}
		function setquantity(string $quantite){
			$this->quantite=$quantite;
		}
		function setprice(string $price){
			$this->price=$price;
		}
	}


?>