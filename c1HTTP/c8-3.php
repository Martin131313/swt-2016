<?php 

class Vozilo{
	protected $pogon;
	protected $gorivo; 

	public function setGorivo($g){
		$this->gorivo = $g;
	}

	public function getGorivo(){
		return $this->gorivo;
	}

	public function setPogon($p){
		$this->pogon = $p;
	}


	public function getPogon(){
		return $this->pogon;
	}
}

class PlovnoVozilo extends Vozilo {

}

class VozdushnoVozilo extends Vozilo {

}

class KopnenoVozilo extends Vozilo {

	protected $brSvetla = 0;
	protected $prenos;

	public function setBrSvetla($b){
		$this->brSvetla = $b;
	}

	public function getBrSvetla(){
		return $this->brSvetla;
	}

	public function setPrenos($p){
		$this->Prenos = $p;
	}

	public function getPrenos(){
		return $this->Prenos;
	}
}





 ?>