<?php
require_once "Data/Person.php";

$person = New $Person("Budi", "Lumajang");
$person->name = "Budi";
$person->addres= "Lumajang";
$person->contry = "Indo";
// $person->age = 19;

var_dump($person);

?>