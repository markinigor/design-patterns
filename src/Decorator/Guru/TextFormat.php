<?php

namespace App\Decorator\Guru;

class TextFormat implements InputFormat
{
    protected InputFormat $inputFormat;

    /**
     * @param InputFormat $inputFormat
     */
    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * Декоратор делегирует всю работу обёрнутому компоненту.
     */
    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}