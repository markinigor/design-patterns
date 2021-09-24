<?php

namespace Tests\Builder\DP;

use App\Builder\DP\CarBuilder;
use App\Builder\DP\Director;
use App\Builder\DP\Parts\Car;
use App\Builder\DP\Parts\Truck;
use App\Builder\DP\TruckBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}