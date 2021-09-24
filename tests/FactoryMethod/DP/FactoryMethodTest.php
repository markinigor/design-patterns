<?php

namespace Tests\FactoryMethod\DP;

use App\FactoryMethod\DP\FileLogger;
use App\FactoryMethod\DP\FileLoggerFactory;
use App\FactoryMethod\DP\StdoutLogger;
use App\FactoryMethod\DP\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_stdout_logging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    /**
     * @test
     */
    public function can_create_file_logging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}