<?php
	class product{
        private $id;
		private $nom;
		private $img;
		private $prix;
		private $quantite;
		
		function __construct( $nom,$prix, $quantite, $img){
			$this->nom=$nom;
			$this->prix=$prix;
			$this->quantite=$quantite;
			$this->img=$img;
		}


		// function get_id(){
		// 	return $this->id;
		// }

		function getnom(){
			return $this->nom;
		}
		function getimg(){
			return $this->img;
		}
		function getprix(){
			return $this->prix;
		}
		function getquantite(){
			return $this->quantite;
		}
		

		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setimg(string $img){
			$this->img=$img;
		}
		function setprix(string $prix){
			$this->prix=$prix;
		}
		function setquantite(string $quantite){
			$this->quantite=$quantite;
		}
	}


?>