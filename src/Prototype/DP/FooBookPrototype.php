<?php

namespace App\Prototype\DP;

class FooBookPrototype extends BookPrototype
{
    protected string $category = 'Foo';

    public function __clone()
    {

    }
}