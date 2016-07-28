<?php

class SetiranjePrikazivanja {

	private $a = 5;

	
	public function set_a($vrijednost) {
		$this->a = $vrijednost;
	}
	
	public function get_a(){
		return $this->a;
	}
	
}

$pristup = new SetiranjePrikazivanja();

/*echo $pristup->a;*/
echo $pristup->get_a() ."<br/>";

/*$pristup->a=4;*/

$pristup->set_a(10);

echo $pristup->get_a() ."<br/>";

?>