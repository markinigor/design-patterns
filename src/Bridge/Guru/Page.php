<?php

namespace App\Bridge\Guru;

/**
 * Абстракция.
 */
abstract class Page
{
    protected Renderer $renderer;

    /**
     * Обычно Абстракция инициализируется одним из объектов Реализации.
     */
    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * Паттерн Мост позволяет динамически заменять присоединённый объект
     * Реализации.
     */
    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    /**
     * Поведение «вида» остаётся абстрактным, так как оно предоставляется только
     * классами Конкретной Абстракции.
     */
    abstract public function view(): string;
}