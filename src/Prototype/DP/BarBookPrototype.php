<?php

namespace App\Prototype\DP;

class BarBookPrototype extends BookPrototype
{
    protected string $category = 'Bar';

    public function __clone()
    {
        
    }
}