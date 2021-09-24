<?php

namespace Tests\AbstractFactory\DP;

use App\AbstractFactory\DP\CsvWriter;
use App\AbstractFactory\DP\JsonWriter;
use App\AbstractFactory\DP\UnixWriterFactory;
use App\AbstractFactory\DP\WinWriterFactory;
use App\AbstractFactory\DP\WriterFactory;
use App\FactoryMethod\DP\FileLogger;
use App\FactoryMethod\DP\FileLoggerFactory;
use App\FactoryMethod\DP\StdoutLogger;
use App\FactoryMethod\DP\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()],
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}