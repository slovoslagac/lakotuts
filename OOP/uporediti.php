<?php
	class Stol {
		public $naziv = "Stol";
	}
	
	
$stol = new Stol;
$stol_referenca = $stol;
$stol_klon = clone $stol;
$stol_promjena = clone $stol;
$stol_promjena->naziv = "Stol 2";
$stol_new = new Stol;
$stol_new->naziv = "Stol 3";

//== proverava da li su atributi jednaki
//=== proverava da li su isti objekti u pitanju


echo "== <br/>";
echo $stol == $stol_referenca ? "true" : "false";
echo "<br/>";
echo $stol == $stol_klon ? "true" : "false";
echo "<br/>";
echo $stol == $stol_promjena ? "true" : "false";
echo "<br/>";
echo $stol == $stol_new ? "true" : "false";

echo "<br/>";
echo "=== <br/>";
echo $stol === $stol_referenca ? "true" : "false";
echo "<br/>";
echo $stol === $stol_klon ? "true" : "false";
echo "<br/>";
echo $stol === $stol_promjena ? "true" : "false";
echo "<br/>";
echo $stol === $stol_new ? "true" : "false";

?>