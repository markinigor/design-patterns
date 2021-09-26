<?php

namespace Tests\Mediator\DP;

use App\Mediator\DP\Ui;
use App\Mediator\DP\UserRepository;
use App\Mediator\DP\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}