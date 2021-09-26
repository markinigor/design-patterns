<?php

namespace App\Strategy\DP;

class IdComparator implements Comparator
{

    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}