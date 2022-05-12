<?php
	class reclamation{
		private $id_rec=null;
		private $date_rec;
		private $id_user=null;
		private $objet=null;
		private $detail=null;
		private $etat=null;
		
		private $password=null;
		function __construct($id_rec, $date_rec, $id_user, $objet, $detail, $etat){
			$this->id_rec=$id_rec;
			$this->date_rec=$date_rec;
			$this->id_user=$id_user;
			$this->objet=$objet;
			$this->detail=$detail;
			$this->etat=$etat;
		}
		function getId_rec(){
			return $this->id_rec;
		}
		function getDate_rec(){
			return $this->date_rec;
		}
		function getId_user(){
			return $this->id_user;
		}
		function getObjet(){
			return $this->objet;
		}
		function getDetail(){
			return $this->detail;
		}
		function getEtat(){
			return $this->etat;
		}
		function setDate_rec(string $date_rec){
			$this->date_rec=$date_rec;
		}
		function setId_user(string $id_user){
			$this->id_user=$id_user;
		}
		function setObjet(string $objet){
			$this->objet=$objet;
		}
		function setDetail(string $detail){
			$this->detail=$detail;
		}
		function setEtat(string $etat){
			$this->etat=$etat;
		}
		
	}


?>