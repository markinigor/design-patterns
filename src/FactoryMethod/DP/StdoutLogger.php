<?php

namespace App\FactoryMethod\DP;

class StdoutLogger implements Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}