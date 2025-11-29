<?php
require_once "Data/Person.php"; //Ini wajib ada
define("APLICATION", "Belajar OOP PHP");
const app_version = '1.0.0';

echo APLICATION . PHP_EOL;
echo app_version . PHP_EOL;

echo Person::AUTHOR . PHP_EOL; //Cara manggil variabel constan di objek


?>