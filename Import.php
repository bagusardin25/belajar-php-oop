<?php
require_once "Data/Conflic.php";
require_once "Data/Helper.php";

use Data\One\Conflict;

use const helper\APPLICATION;
use function helper\budi;

$conflict1 = new Conflict;
$conflict2 = new Data\Two\Conflict;

echo "welcome di $conflict1" . PHP_EOL;
echo "welcome di $conflict2" . PHP_EOL;


budi();
echo APPLICATION;
?>