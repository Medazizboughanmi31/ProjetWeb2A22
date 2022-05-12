<?php
	class cart{
        private $id_p;
		private $id_u;
		private $id_c;
		private $quantite;
		
		function __construct( $id_p,$id_u, $id_c, $quantite){
			$this->id_p=$id_p;
			$this->id_u=$id_u;
			$this->id_c=$id_c;
			$this->quantite=$quantite;
		}


		// function get_id(){
		// 	return $this->id;
		// }

		function getid_p(){
			return $this->id_p;
		}
		function getid_u(){
			return $this->id_u;
		}
		function getid_c(){
			return $this->id_c;
		}
		function getquantity(){
			return $this->quantite;
		}
		

		function setid_p(string $id_p){
			$this->id_p=$id_p;
		}
		function setid_u(string $id_u){
			$this->id_u=$id_u;
		}
		function setid_c(string $id_c){
			$this->id_c=$id_c;
		}
		function setquantity(string $quantite){
			$this->quantite=$quantite;
		}
	}


?>