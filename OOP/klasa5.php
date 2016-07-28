<?php

class Covjek
{
    public $broj_ruku = 2;
    public $broj_nogu = 2;
    private $ime;
    private $prezime;

    function pozdrav()
    {
        echo "Pozdrav iz klase " . get_class($this) . "<br/>";
    }

    public function ImePrezime()
    {
        return $this->ime . " " . $this->prezime . "<br/>";
    }

    function set_name($name)
    {
        $this->ime = $name;
    }

    function set_lastname($lastname)
    {
        $this->prezime = $lastname;
    }
}

$covjek1 = new Covjek();
echo $covjek1->broj_ruku . "<br/>";
$covjek1->set_name("Petar");
$covjek1->set_lastname("Prodanovic");


$covjek2 = new Covjek();
$covjek2->broj_ruku = 1;
echo $covjek2->broj_ruku . "<br/>";
$covjek2->set_name("Predrag");
$covjek2->set_lastname("Vranes");

echo $covjek1->ImePrezime();
echo $covjek2->ImePrezime();

$variable = get_class_vars('Covjek');

foreach ($variable as $key => $value) {
    echo "{$key}: {$value} <br/>";
}


echo property_exists('Covjek', 'ime') ? "true" : "false";
echo  "<br/>";

//echo $covjek1 ->ime;

$class_methods = get_class_methods('Covjek');

foreach ($class_methods as $method_name) {
    echo "$method_name". "<br/>";
}

?>