<?php

namespace classes;

class Car
{
    public string $brand;

    public string $color;

    public int $engine;

    function run()
    {
        echo "{$this->brand} is running";
    }
}