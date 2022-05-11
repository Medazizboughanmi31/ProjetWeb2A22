<?php
	class ticktes{
		private $id_tk=null;
		private $name_tk=null;
		private $mail_tk=null;
		private $type_tk=null;
        private $id3_ev=null;
		function __construct($id_tk,$name_tk,$mail_tk,$type_tk,$id3_ev){
            $this->id_tk=$id_tk;
			$this->name_tk=$name_tk;
			$this->mail_tk=$mail_tk;
			$this->type_tk=$type_tk;
			$this->id3_ev=$id3_ev;
			
		}
        

		function getid(){
			return $this->id_tk;
		}
		function getNom(){
			return $this->name_tk;
		}
		function getEmail(){
			return $this->mail_tk;
		}
		function gettype(){
			return $this->type_tk;
		}
		function getid_ev(){
			return $this->id3_ev;
		}
		


		function setNom(string $name_tk){
			$this->name_tk=$name_tk;
		}
		function setEmail(string $mail_tk){
			$this->mail_tk=$mail_tk;
		}
		function settype(string $type_tk){
			$this->type_tk=$type_tk;
		}
		function setid_ev(string $id3_ev){
			$this->id3_ev=$id3_ev;
		}
		
	}


?>