<?php

namespace App\FactoryMethod\Zandstra;

class BloggsCommsManager extends CommsManager
{

    public function getHeaderText(): string
    {
        return "BloggsCal верхний колонтитул \n";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCal нижний колонтитул \n";
    }
}