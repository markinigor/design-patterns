<?php

namespace Tests\Adapter\DP;

use App\Adapter\DP\EBookAdapter;
use App\Adapter\DP\Kindle;
use App\Adapter\DP\PaperBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    /**
     * @test
     */
    public function can_turn_page_on_book()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    /**
     * @test
     */
    public function can_turn_page_on_kindle_like_in_a_normal_book()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}