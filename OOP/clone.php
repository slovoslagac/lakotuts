<?php
class Stol {

	public $noge = 0;
	public $naziv;

	static $ukupno_stolova = 0;

	public function __construct($noge = 4,$naziv = "Stol"){
		$this->noge = $noge;
		$this->naziv = $naziv;
		self::$ukupno_stolova++;
		echo "Kreiran je astal<br />";
	}
	
	public function __clone() {
		echo "Kloniran je stol <br/>";
		
	}

	public function __destruct() {
		self::$ukupno_stolova--;
	}

}

$petar = new Stol(4,"Petar");

echo $petar->naziv."<br/>";
$prodanovic = $petar;
$prodanovic->naziv = "Prodanovic";
$petar->naziv = "Bajko";

echo $prodanovic->naziv."<br/>";
echo $prodanovic->noge."<br/>";
echo $petar->naziv."<br/>";

$clone = clone $petar;
$clone->naziv = "Klonirani astal Petar <br/>";

echo $petar->naziv."<br/>";
echo $clone->naziv."<br/>";


?>