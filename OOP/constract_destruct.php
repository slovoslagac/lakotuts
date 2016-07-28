<?php
class Stol {
	
	public $noge = 0;
	
	static $ukupno_stolova = 0;
	
	public function __construct($noge = 4){
		$this->noge = $noge;
		self::$ukupno_stolova++;
	}
	
	public function __destruct() {
		self::$ukupno_stolova--;
	}
	
}

$stol = new Stol(12);

echo "Stol 1 ima noga :" .$stol->noge ."<br/>";
echo "Ukupno stolova : " . Stol::$ukupno_stolova ."<br/>";

$stol2 = new Stol(5);

$stol3 = new Stol();
$stol4 = new Stol(0);

echo "Stol 2 ima noga :" .$stol2->noge ."<br/>";
echo "Stol 3 ima noga :" .$stol3->noge ."<br/>";
echo "Stol 4 ima noga :" .$stol4->noge ."<br/>";
echo "Ukupno stolova : " . Stol::$ukupno_stolova ."<br/>";
