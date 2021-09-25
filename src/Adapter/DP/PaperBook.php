<?php

namespace App\Adapter\DP;

class PaperBook implements Book
{
    private int $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }



    public function getPage(): int
    {
        return $this->page;
    }
}