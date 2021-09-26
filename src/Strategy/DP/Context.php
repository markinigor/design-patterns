<?php

namespace App\Strategy\DP;

class Context
{
    public function __construct(private Comparator $comparator)
    {

    }

    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}