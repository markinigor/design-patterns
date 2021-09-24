<?php

namespace App\AbstractFactory\DP;

class WinWriterFactory implements WriterFactory
{

    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}