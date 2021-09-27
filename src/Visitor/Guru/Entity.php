<?php

namespace App\Visitor\Guru;

interface Entity
{
    public function accept(Visitor $visitor): string;
}