<?php
//moguce varijante - dozvoljene
$_Variabla;
$variabla;
$Variabla;

//nedozvoljeno0e
//$3bla;

$novaVariabla = "LakoTuts - Ovo je novo";
$broj = 5;

$broj2 = 10;
$zbroj = $broj + $broj2;

?>


<h1><?php echo $novaVariabla;?></h1>
<p>Ovo je opis o <?php echo $novaVariabla;?></p>


<?php
echo '<h1>'.$novaVariabla.'</h1>';

echo "<h1>$novaVariabla</h1> </br>";

echo $broj . ' + '. $broj2 . ' = '. $zbroj."</br>";

echo $_SERVER['HTTP_USER_AGENT'];
?>