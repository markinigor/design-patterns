<?php

namespace App\AbstractFactory\Guru;

/**
 * А этот Конкретный Продукт предоставляет шаблоны заголовков страниц
 * PHPTemplate.
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}