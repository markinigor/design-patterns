<?php

namespace Tests\Bridge\DP;

use App\Bridge\DP\HelloWorldService;
use App\Bridge\DP\HtmlFormatter;
use App\Bridge\DP\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    /**
     * @test
     */
    public function can_print_using_the_plain_text_formatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    /**
     * @test
     */
    public function can_print_using_the_html_formatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}