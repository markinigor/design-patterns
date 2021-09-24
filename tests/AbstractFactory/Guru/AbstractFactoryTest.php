<?php

namespace Tests\AbstractFactory\Guru;

use App\AbstractFactory\Guru\PageTemplate;
use App\AbstractFactory\Guru\PHPTemplateFactory;
use App\AbstractFactory\Guru\TemplateFactory;
use App\AbstractFactory\Guru\TemplateRenderer;
use App\AbstractFactory\Guru\TitleTemplate;
use App\AbstractFactory\Guru\TwigTemplateFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new PHPTemplateFactory()],
            [new TwigTemplateFactory()],
        ];
    }

    /**
     * @test
     * @dataProvider provideFactory
     */
    public function it_works(TemplateFactory $templateFactory)
    {
        $this->assertInstanceOf(PageTemplate::class, $templateFactory->createPageTemplate());
        $this->assertInstanceOf(TitleTemplate::class, $templateFactory->createTitleTemplate());
        $this->assertInstanceOf(TemplateRenderer::class, $templateFactory->getRenderer());
    }
}