<?php
	class sponsors{
		private $id_sp=null;
		private $name_sp=null;
		private $type_sp=null;
		private $numtel_sp=null;
        private $mail_sp=null;
		private $inves_sp=null;
		private $image_sp=null;
		private $descrip_sp=null;
		private $id2_ev=null;
		function __construct($id_sp, $name_sp_sp,$type_sp, $numtel_sp ,$mail_sp, $inves_sp, $image_sp,$descrip_sp,$id2_ev){
            $this->id_sp=$id_sp;
			$this->name_sp_sp=$name_sp_sp;
			$this->type_sp=$type_sp;
			$this->numtel_sp=$numtel_sp;
			$this->mail_sp=$mail_sp;
			$this->inves_sp=$inves_sp;
			$this->image_sp=$image_sp;
			$this->descrip_sp=$descrip_sp;
			$this->id2_ev=$id2_ev;
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid(){
			return $this->id_sp;
		}
		function getNom(){
			return $this->name_sp_sp;
		}
		function getEmail(){
			return $this->mail_sp;
		}
		function gettype(){
			return $this->type_sp;
		}
		function getnumero(){
			return $this->numtel_sp;
		}
		function getinves(){
			return $this->inves_sp;
		}
		function getimage(){
			return $this->image_sp;
		}

		function getdescrip(){
			return $this->descrip_sp;
		}
		function getid_ev(){
			return $this->id2_ev;
		}
		


		function setNom(string $name_sp){
			$this->name_sp=$name_sp;
		}
		function setEmail(string $mail_sp){
			$this->mail_sp=$mail_sp;
		}
		function setnumero(string $numtel_sp){
			$this->numtel_sp=$numtel_sp;
		}
		function settype(string $type_sp){
			$this->type_sp=$type_sp;
		}
		function setinves(string $inves_sp){
			$this->inves_sp=$inves_sp;
		}
		function setimage(string $image_sp){
			$this->image_sp=$image_sp;
		}
	
		function setdescrip(string $descrip_sp){
			$this->descrip_sp=$descrip_sp;
		}
		function setid_ev(string $id2_ev){
			$this->id2_ev=$id2_ev;
		}
		
	}


?>