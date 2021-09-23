<?php

namespace App\FactoryMethod\Zandstra;

class BloggsApptEncoder extends ApptEncoder
{

    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsCal \п";
    }
}