<?php

namespace App\Bridge\DP;

class HelloWorldService extends Service
{

    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}