<?php

namespace App\Adapter\DP;

interface Book
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}