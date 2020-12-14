<?php

namespace classes;

class Vehicle
{
    public string $brand;

    public string $color;

    public int $engine;

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    function run()
    {
        echo "{$this->brand} is running";
    }
}