<?php

namespace App\AbstractFactory\DP;

class WinJsonWriter implements JsonWriter
{

    public function write(array $data, bool $formatted): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}