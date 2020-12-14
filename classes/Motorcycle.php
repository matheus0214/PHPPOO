<?php

namespace classes;

require __DIR__ . "/Vehicle.php";

class Motorcycle extends Vehicle
{
    public function __construct($brand = null, $color = null)
    {
        parent::__construct($brand, strtoupper($color));
    }
}