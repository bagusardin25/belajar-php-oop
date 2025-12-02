<?php
require_once "Data/Shape.php";

use Data\{Shape, Rextengel};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rektengel = new Rextengel();
echo $rektengel->getCorner() . PHP_EOL;
echo $rektengel->getParentCorner();
?>