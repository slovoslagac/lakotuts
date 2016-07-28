<?php
class Covjek {}

 
$sveKlase = get_declared_classes();
/*
foreach ($sveKlase as $klasa) {
 echo $klasa. "<br/>";	
}
*/
if (class_exists("Covjek")) {
	echo "postoji klasa Covjek" ;
} else {
	echo "be postoji klasa Covjek";
}


?>