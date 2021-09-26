<?php

namespace App\Proxy\Guru;

/**
 * Интерфейс Субъекта описывает интерфейс реального объекта.
 *
 * Дело в том, что у большинства приложений нет чётко определённого интерфейса.
 * В этом случае лучше было бы расширить Заместителя за счёт существующего
 * класса приложения. Если это неудобно, тогда первым шагом должно быть
 * извлечение правильного интерфейса.
 */
interface Downloader
{
    public function download(string $url): string;
}