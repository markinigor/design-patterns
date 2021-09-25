<?php

namespace Tests\Composite\DP;

use App\Composite\DP\Form;
use App\Composite\DP\InputElement;
use App\Composite\DP\TextElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    /**
     * @test
     */
    public function render_form()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}