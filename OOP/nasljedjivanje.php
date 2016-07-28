<?php
/*Nasledjivanje*/

class Zgrada {
	public $vrata = 1;
	public $prozori = 6;
	public $broj_katova = 2;

	public function broj_rupa() {
		return $this ->vrata + $this ->prozori;
	}
}

class Hotel extends Zgrada {
	public $vrata = 2;
	public $broj_katova = 10;
	
//	public function broj_rupa() {
//		return ($this ->vrata + $this ->prozori) * 100;
//	}
}

$zgrada = new Zgrada();

echo "Vrata: " . $zgrada -> vrata ."<br/>";
echo "Prozori: " . $zgrada -> prozori ."<br/>";
echo "Broj katova: " . $zgrada -> broj_katova ."<br/>";
echo "Broj otvora: " . $zgrada->broj_rupa() ."<br/>";


echo "<br/>";


$hotel = new Hotel();


echo "Hotel: ".  $hotel ->vrata ."<br/>";
echo "Prozori: " . $hotel -> prozori ."<br/>";
echo "Broj katova: " . $hotel -> broj_katova ."<br/>";
echo "Broj otvora: " . $hotel->broj_rupa() ."<br/>";


echo "Zgrada je nasledila od : " .get_parent_class("Zgrada") ."<br/>";
echo "Hotel je nasledila od : " .get_parent_class("Hotel") ."<br/>";

echo "Zgrada je nasledila od Hotela :" . is_subclass_of("hotel","Zgrada" ) ."<br/>";

?>