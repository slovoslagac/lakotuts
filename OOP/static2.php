<?php
class StaticKlasa {

	static $a =0;

	static function add() {
		self::$a++;
	}

	static function pozdrav($txt = "Pozdrav") {
		echo "{$txt} korisniku klase <br/>"
		;
	}
	public function pozz() {
		echo "Hello <br/>";
	}	

}

class StaticKlasa2 extends StaticKlasa {
	static function test_a() {
		echo parent::$a ."<br/>";
	}
	static function test_pozdrav() {
		echo parent::pozdrav() ."<br/>";
	}
	public function test_pozz(){
		echo parent::pozz();
	}
	
	public function pozz() {
		echo "-----------------------<br/>";
		echo parent::pozz();
		echo "--------------<br/>";
	}
}
StaticKlasa::add();

StaticKlasa2::test_a();
StaticKlasa2::test_pozdrav();

$objekat = new StaticKlasa2();

$objekat ->pozz();


?>