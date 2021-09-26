<?php

namespace App\Strategy\Guru;

/**
 * Интерфейс Стратегии описывает, как клиент может использовать различные
 * Конкретные Стратегии.
 *
 * Обратите внимание, что в большинстве примеров, которые можно найти в
 * интернете, стратегии чаще всего делают какую-нибудь мелочь в рамках одного
 * метода.
 */
interface PaymentMethod
{
    public function getPaymentForm(Order $order): string;

    public function validateReturn(Order $order, array $data): bool;
}