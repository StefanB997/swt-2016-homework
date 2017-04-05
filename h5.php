<?php 
class Vozilo {
	protected $shasija;
	protected $model;
	protected $tip;
	protected $svetla;
	protected $pogon;
	protected $gorivo;
	protected $prozori;
	protected $vrati;
	protected $napojuvanje;
	
	public function setPogon($p){
		$this->pogon = $p;
	}
	public function getPogon(){
		return $this->pogon;
	}
	public function setGorivo($g){
		$this->gorivo = $g;
	}
	public function getGorivo(){
		return $this->gorivo;
	}
}
	class PlovnoVozilo extends Vozilo {

	}

	class OtvorenTrup extends TipPlovni{

		public $brod;
		public $gliser;
		public $jahta;

	}

	class ZatvorenTrup extends TipPlovni{

		public $podmornica ;

	}

	class TipPlovni extends PlovnoVozilo{

		public $podvodni;
		public $nadvodni;
	}

	class ModeliPlovni extends TipVozdushni{
		public $triumf;
		public $stratos;
	}





	class VozdushnoVozilo extends Vozilo {
	
	}

	class Vozdushni extends TipVozdushni{
		public $helikopter;
		public $avion;
	}

	class TipVozdushni extends VozdushnoVozilo{
		public $mlazni;
		public $propeler;
	}

	class ModeliVozdushni extends TipVozdushni{
		public $suhoj;
		public $mig;
		public $raptor;
		public $apachi;
	}



	class KopnenoVozilo extends Vozilo {	
	
	}

	
	class Trkala extends Tip {
		public $kola;
		public $kamion;
		public $kombe;
		public $avtobus;
	}

	class Shinski extends Tip {
		public $voz;
		public $tramvaj;
	}

	class Tip extends KopnenoVozilo {
		public $hechbek;
		public $kupe;
		public $karavan;
		public $sedan;
	}

	class Model extends Tip{
		public $audi;
		public $bmw;
		public $pezo;
		

	}



?>
