<?php
	class magasin{
		private $id_magasin=null;
		private $nom_magasin=null;
		private $adresse_magasin=null;
		private $tel_magasin=null;
		private $localisation_map=null;
	
		function __construct($id_magasin, $nom_magasin, $adresse_magasin ,$tel_magasin){
			$this->id_magasin=$id_magasin;
			$this->nom_magasin=$nom_magasin;
			$this->adresse_magasin=$adresse_magasin;
			$this->tel_magasin=$tel_magasin;
			$this->localisation_map=$localisation_map;
		}
		function getid(){
			return $this->id_magasin;
		}
		function getnom(){
			return $this->nom_magasin;
		}
		
		function getadresse(){
			return $this->adresse_magasin;
		}
		
		function gettel(){
			return $this->tel_magasin;
		}
		function getlocalisation(){
			return $this->localisation_map;
		}
		function setnom(string $nom_magasin){
			$this->nom_magasin=$nom_magasin;
		}
		

		function setadresse(string $adresse_magasin){
			$this->adresse_magasin=$adresse_magasin;
		}
		
		function settel(string $tel_magasin){
			$this->tel_magasin=$tel_magasin;
		}
		function setlocalisation(string $localisation_map){
			$this->localisation_map=$localisation_map;
		}
		
	}


?>