<?php

namespace classes;

class Vehicle
{
    public string $brand;

    public string $color;

    public int $engine;

    function run()
    {
        echo "{$this->brand} is running";
    }
}