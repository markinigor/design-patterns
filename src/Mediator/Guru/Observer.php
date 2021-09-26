<?php

namespace App\Mediator\Guru;

/**
 * Интерфейс Наблюдателя определяет, как компоненты получают уведомления о
 * событиях.
 */
interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}