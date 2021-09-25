<?php

namespace App\Composite\DP;

class InputElement implements Renderable
{

    public function render(): string
    {
        return '<input type="text" />';
    }
}