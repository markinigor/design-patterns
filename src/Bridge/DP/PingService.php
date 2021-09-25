<?php

namespace App\Bridge\DP;

class PingService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('pong');
    }
}