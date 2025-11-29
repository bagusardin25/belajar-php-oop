<?php
require_once "Data/Person.php";

$bagus = New Person("bagus", "lumajang", 10);
$bagus->name = "bagus";
$bagus->SayHello("Adli");

$huda = New Person("Huda", "lumajang", 19);
$huda->name = "Huda";

$bagus->infoAuthor();
$huda->infoAuthor();
?>