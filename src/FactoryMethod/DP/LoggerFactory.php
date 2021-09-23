<?php

namespace App\FactoryMethod\DP;

interface LoggerFactory
{
    public function createLogger(): Logger;
}