<?php
	class livraison{
		private $ref=null;
		private $pre=null;
		private $nom=null;
		private $adrm=null;
        private $mdp=null;
		private $num=null;
		private $pays=null;
		private $ville=null;
		private $adr=null;
		private $cp=null;
		private $tlp=null;
		function __construct($ref, $pre,$nom, $adrm ,$mdp, $num, $pays,$ville,$adr,$cp,$tlp){
            $this->ref=$ref;
			$this->pre=$pre;
			$this->nom=$nom;
			$this->adrm=$adrm;
			$this->mdp=$mdp;
			$this->num=$num;
			$this->pays=$pays;
			$this->ville=$ville;
			$this->adr=$adr;
			$this->cp=$cp;
			$this->tlp=$tlp;
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function get_ref(){
			return $this->ref;
		}
		function getpre(){
			return $this->pre;
		}
		function getnom(){
			return $this->nom;
		}
		function getadrm(){
			return $this->adrm;
		}
		function getmdp(){
			return $this->mdp;
		}
		function getnum(){
			return $this->num;
		}
		function getpays(){
			return $this->pays;
		}

		function getville(){
			return $this->ville;
		}

		function getadr(){
			return $this->adr;
		}

		function getcp(){
			return $this->cp;
		}

		function gettlp(){
			return $this->tlp;
		}

		

		function setpre(string $pre){
			$this->pre=$pre;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setadrm(string $adrm){
			$this->adrm=$adrm;
		}
		function setmdp(string $mdp){
			$this->mdp=$mdp;
		}
		function setnum(string $num){
			$this->num=$num;
		}
		function setpays(string $pays){
			$this->pays=$pays;
		}
	
		function setville(string $ville){
			$this->ville=$ville;
		}

		function setadr(string $adr){
			$this->adr=$adr;
		}

		function setcp(string $cp){
			$this->cp=$cp;
		}	

		function settlp(string $tlp){
			$this->tlp=$tlp;
		}		
	}


?>