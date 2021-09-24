<?php

namespace App\Prototype\Guru;

class Author
{
    private string $name;

    /**
     * @var Page[]
     */
    private array $pages = [];

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }


}