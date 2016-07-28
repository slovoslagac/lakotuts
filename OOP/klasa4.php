<?php
class Covjek {

	function pozdrav(){
		echo "Pozdrav iz klase " . get_class($this) ."<br/>";
	}
	
	function poz() {
		$this->pozdrav();
	}
}

$covjek = new Covjek();
$covjek -> pozdrav();

$covjek -> poz();
?>