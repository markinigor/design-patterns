<?php

namespace App\Facade\Guru;

/**
 * Подсистема API YouTube.
 */
class YouTube
{
    public function fetchVideo(): string
    {
        return 'some-video-source';
    }

    public function saveAs(string $path): void { /* ... */ }

}