<?php
	class facture{
		private $cin_fa=null;
		private $date=null;
		private $rf=null;
		private $ad=null;
        private $ntel=null;
		private $adm=null;
		private $des=null;
		private $qu=null;
		private $pru=null;
		private $tot=null;
		private $tax=null;
		private $totf=null;
		function __construct($cin_fa, $date,$rf, $ad ,$ntel, $adm, $des,$qu,$pru,$tot,$tax,$totf){
            $this->cin_fa=$cin_fa;
			$this->date=$date;
			$this->rf=$rf;
			$this->ad=$ad;
			$this->ntel=$ntel;
			$this->adm=$adm;
			$this->des=$des;
			$this->qu=$qu;
			$this->pru=$pru;
			$this->tot=$tot;
			$this->tax=$tax;
			$this->totf=$totf;
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function get_cin(){
			return $this->cin_fa;
		}
		function getdate(){
			return $this->date;
		}
		function getrf(){
			return $this->rf;
		}
		function getad(){
			return $this->ad;
		}
		function getntel(){
			return $this->ntel;
		}
		function getadm(){
			return $this->adm;
		}
		function getdes(){
			return $this->des;
		}

		function getqu(){
			return $this->qu;
		}

		function getpru(){
			return $this->pru;
		}

		function gettot(){
			return $this->tot;
		}

		function gettax(){
			return $this->tax;
		}

		function gettotf(){
			return $this->totf;
		}
		


		function setdate(string $date){
			$this->date=$date;
		}
		function setrf(string $rf){
			$this->rf=$rf;
		}
		function setad(string $ad){
			$this->ad=$ad;
		}
		function setntel(string $ntel){
			$this->ntel=$ntel;
		}
		function setadm(string $adm){
			$this->adm=$adm;
		}
		function setdes(string $des){
			$this->des=$des;
		}
	
		function setqu(string $qu){
			$this->qu=$qu;
		}

		function setpru(string $pru){
			$this->pru=$pru;
		}

		function settot(string $tot){
			$this->tot=$tot;
		}

		function settax(string $tax){
			$this->tax=$tax;
		}

		function settotf(string $totf){
			$this->totf=$totf;
		}
		
	}


?>