<?php

namespace App\Proxy\DP;

interface BankAccount
{
    public function deposit(int $amount);

    public function getBalance(): int;
}