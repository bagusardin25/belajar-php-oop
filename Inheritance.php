<?php
require_once "Data/Manager.php";

$suami = new Suami();
$suami->name="Suyanto";
$suami->Anak("Gubil");

$ibu = new Istri();
$ibu->name="Suyanti";
$ibu->Anak("Gubil");

echo "Satu keluarga sehat, $suami->name dan $ibu->name"
?>