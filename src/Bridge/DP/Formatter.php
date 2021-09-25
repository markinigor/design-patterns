<?php

namespace App\Bridge\DP;

interface Formatter
{
    public function format(string $text): string;
}