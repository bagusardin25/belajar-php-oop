<?php
require_once "Data/Person.php";

$bagus = New Person();
$bagus->name = "bagus";
$bagus->SayHello("Adli");

$huda = New Person();
$huda->name = "Huda";

$bagus->infoAuthor();
$huda->infoAuthor();
?>