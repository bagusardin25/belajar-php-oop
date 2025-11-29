<?php
require_once 'Data/Person.php';

$person1 = New Person("Agus", "Denpasar", 20);
$person1->name = "Agus";
$person1->addres = null;
// $person1->country = "Indo";

echo "Nama: $person1->name" . PHP_EOL;
echo "Alamat: $person1->addres" . PHP_EOL;
echo "Usia: $person1->age" . PHP_EOL;
echo "Negara: $person1->country" . PHP_EOL;

$person2 = New Person("Bagus", "Ketintang", 19); //Parameter dari konstuktor
// $person2->name = "Bagus";
// $person2->addres = "Ketintang";
// $person2->country = "Taiwan";

echo "Nama: $person2->name" . PHP_EOL;
echo "Alamat: $person2->addres" . PHP_EOL;
echo "Usia: $person2->age" . PHP_EOL;
echo "Negara: $person2->country" . PHP_EOL;
?>