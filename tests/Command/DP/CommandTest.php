<?php

namespace Tests\Command\DP;

use App\Command\DP\HelloCommand;
use App\Command\DP\Invoker;
use App\Command\DP\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    /**
     * @test
     */
    public function invocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}