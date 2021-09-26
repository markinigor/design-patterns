<?php

namespace App\Strategy\DP;

interface Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     */
    public function compare($a, $b): int;
}