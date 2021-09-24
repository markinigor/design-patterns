<?php

namespace Tests\Prototype\Guru;

use App\Prototype\Guru\Author;
use App\Prototype\Guru\Page;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /**
     * @test
     */
    public function it_clones_from_prototype()
    {
        $author = new Author("John Smith");
        $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

        $page->addComment("Nice tip, thanks!");

        $draft = clone $page;

        $this->assertCount(0, $draft->getComments());
        $this->assertEquals('Copy of ' . $page->getTitle(), $draft->getTitle());
    }
}