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

}

class StaticKlasa2 extends StaticKlasa {};

//$static = new StaticKlasa();
//echo $static->pozdrav("Cao");

echo StaticKlasa::$a . "<br/>";
echo StaticKlasa::pozdrav() ."<br/>";


echo StaticKlasa2::pozdrav("Cao bela") ."<br/>";
StaticKlasa::$a=5;
StaticKlasa::add();
echo StaticKlasa2::$a . "<br/>";
?>