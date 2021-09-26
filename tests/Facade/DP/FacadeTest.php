<?php

namespace Tests\Facade\DP;

use App\Facade\DP\Bios;
use App\Facade\DP\Facade;
use App\Facade\DP\OperatingSystem;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    /**
     * @test
     */
    public function computer_on()
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}