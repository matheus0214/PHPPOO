<?php

require __DIR__ . "/classes/Car.php";

use classes\Car;

$car1 = new Car;
$car1->brand = "Ferrari";
$car1->color = "Red";
$car1->engine = 12;
$car1->doors = 4;

$car1->run();
echo "<br />";

var_dump($car1);