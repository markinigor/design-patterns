<?php

namespace App\AbstractFactory\DP;

interface CsvWriter
{
    public function write(array $line): string;
}