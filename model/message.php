<?php
	class message{
		private $id_message=null;
		private $date_message=null;
		private $id_user=null;
		private $detail=null;
		private $id_rec=null;
		
		private $password=null;
		function __construct($id_message, $date_message, $id_user, $detail, $id_rec){
			$this->id_message=$id_message;
			$this->date_message=$date_message;
			$this->id_user=$id_user;
			$this->detail=$detail;
			$this->id_rec=$id_rec;
		}
		function getid_message(){
			return $this->id_message;
		}
		function getdate_message(){
			return $this->date_message;
		}
		function getid_user(){
			return $this->id_user;
		}
		function getdetail(){
			return $this->detail;
		}
		function getid_rec(){
			return $this->id_rec;
		}
		function setdate_message(string $date_message){
			$this->date_message=$date_message;
		}
		function setid_user(string $id_user){
			$this->id_user=$id_user;
		}
		function setdetail(string $detail){
			$this->detail=$detail;
		}
		function setid_rec(string $id_rec){
			$this->id_rec=$id_rec;
		}
		
	}


?>