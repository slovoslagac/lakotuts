<?php
class Covjek {

	function pozdrav (){
		return "Pozdrav iz klase Covjek";
	}
}

$covjek = new Covjek();

$covjek2 = new Covjek();

echo get_class($covjek). "<br/>";

if (is_a($covjek, "Covjek")){
	echo "Da to je objekt klase Covjek <br/>";
} else {
	echo "Nije objekt te klase. <br/>";
}


echo $covjek->pozdrav();

?>