<?php

namespace App\Facade\Guru;

/**
 * Подсистема FFmpeg (сложная библиотека работы с видео/аудио).
 */
class FFMpeg
{
    public static function create(): FFMpeg { /* ... */ }

    public function open(string $video): void { /* ... */ }
}