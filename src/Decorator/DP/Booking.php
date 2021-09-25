<?php

namespace App\Decorator\DP;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}