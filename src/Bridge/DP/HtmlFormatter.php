<?php

namespace App\Bridge\DP;

class HtmlFormatter implements Formatter
{

    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}