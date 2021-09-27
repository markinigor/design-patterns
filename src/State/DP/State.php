<?php

namespace App\State\DP;

interface State
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}