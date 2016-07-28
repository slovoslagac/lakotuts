<?php

/*function imefunkc() {
	
}*/

$ime = "Nikola";

function pozdrav() {
	global $ime;
	$ime = "Ja sam Nikola";
	echo $ime;
}


pozdrav("Aca");

echo "</br> $ime";

/*function vratiIme($ime){
	return $ime;
};

echo vratiIme("Petar");*/

?>