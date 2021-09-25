<?php

namespace App\Adapter\DP;

class Kindle implements EBook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    public function pressNext()
    {
        $this->page++;
    }

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}