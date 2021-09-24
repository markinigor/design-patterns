<?php

namespace App\AbstractFactory\Guru;

/**
 * Классы отрисовки отвечают за преобразование строк шаблонов в конечный HTML
 * код. Каждый такой класс устроен по-разному и ожидает на входе шаблоны только
 * своего типа. Работа с шаблонами через фабрику позволяет вам избавиться от
 * риска подать в отрисовщик шаблон не того типа.
 */
interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}