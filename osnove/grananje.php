<?php

$jezik = "Ruby";
$jezik2 = "php";
/*
	if($jezik == "php"){
		//napravi nesto
		echo "Bravo ucis php";
	} else {
		//napravi nesto drugo
		
		echo "Ucis nesto drugo?";
	}
*/
/*
	if($jezik == "php"){
		//napravi nesto
		echo "Bravo ucis php";
	} elseif($jezik =="Ruby"){
		echo "Pa ti ucis Ruby bravo.";
	} else {
		//napravi nesto drugo
	
		echo "Ucis nesto drugo?";
	}
*/
/*
	if($jezik == "php"){
		//napravi nesto
		echo "Bravo ucis php";
	}
*/
/*
	switch ($jezik){
		case "php":
			echo "bravo ucis PHP";
		break;
		case "Ruby":
			echo "Ti ucis ruby, bravo";
		break;
		
		default:
			echo "Ucis nesto drugo?";
	}
*/
/*
	if($jezik2 == "php" || $jezik == "Ruby"){
		echo "Bravo prva grana je True";
	} else {
		echo "Uvjeti nisu prosli";
	}
*/

$var2 = ($jezik2 == "php" && $jezik == "Ruby") ? "Programiras u vise jezika bla bla" : "Ne programiras";

echo $var2;

?>