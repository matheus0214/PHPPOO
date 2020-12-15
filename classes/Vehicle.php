<?php

namespace classes;

use interfaces\IVehicle;

require __DIR__."/../interfaces/IVehicle.php";

abstract class Vehicle implements IVehicle
{
    public string $brand;

    public string $color;

    public int $engine;

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    function run(): string
    {
        return "{$this->brand} is running";
    }
}