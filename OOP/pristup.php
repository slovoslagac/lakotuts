<?php

class Pristup {

	public $a = 1;
	private $b = 2;
	protected $c = 3;
	
	public function zbir() {
		return $this->a+$this->b;
	}

	function show_b() {
		return $this->b;
	}
	
	public function show_var($test) {
		return $this->$test ."<br/>";
	}
}


$pristup = new Pristup();

$pristup ->a = 54;


echo 'Variabla $a = ' . $pristup->a . "<br/>";
echo 'Variabla $b = ' . $pristup->show_b() . "<br/>";
echo 'Zbir je jednak : ' . $pristup->zbir() . "<br/>";

echo $pristup->show_var('b');

?>