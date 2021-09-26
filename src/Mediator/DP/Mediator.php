<?php

namespace App\Mediator\DP;

interface Mediator
{
    public function getUser(string $username): string;
}