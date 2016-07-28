<?php
class Covjek {
	
	function pozdrav (){
		echo "Pozdrav iz klase Covjek";
	}
}
/*
$metode = get_class_methods("Covjek");

foreach ($metode as $metoda){
	echo $metoda . "<br/>";
}
*/

if (method_exists("Covjek","pozdrav")) {
	echo "metoda postoji <br/>";
} else {
	echo "trazena medoda ne postoji <br/>";
}


?>