<?php

namespace App\AbstractFactory\DP;

interface JsonWriter
{
    public function write(array $data, bool $formatted): string;
}