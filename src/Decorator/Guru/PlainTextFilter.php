<?php

namespace App\Decorator\Guru;

class PlainTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        return strip_tags($text);
    }

}