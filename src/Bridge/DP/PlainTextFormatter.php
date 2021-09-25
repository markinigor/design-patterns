<?php

namespace App\Bridge\DP;

class PlainTextFormatter implements Formatter
{

    public function format(string $text): string
    {
        return $text;
    }
}