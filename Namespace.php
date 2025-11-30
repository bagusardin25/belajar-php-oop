<?php
namespace {
    require_once "Data/Conflic.php";
require_once "Data/Helper.php";

$conlict1 = new Data\One\Conflict();
$conlict2 = new Data\Two\Conflict();

echo helper\APPLICATION . PHP_EOL;
helper\budi();
}


?>