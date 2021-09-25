<?php

namespace App\SimpleFactory\DP;

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}