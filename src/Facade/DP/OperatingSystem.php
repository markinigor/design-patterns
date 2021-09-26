<?php

namespace App\Facade\DP;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}