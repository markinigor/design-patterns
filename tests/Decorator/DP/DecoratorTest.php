<?php

namespace Tests\Decorator\DP;

use App\Decorator\DP\DoubleRoomBooking;
use App\Decorator\DP\ExtraBed;
use App\Decorator\DP\WiFi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @test
     */
    public function can_calculate_price_for_basic_double_room_booking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame('double room', $booking->getDescription());
    }

    /**
     * @test
     */
    public function can_calculate_price_for_double_room_booking_with_wifi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        $this->assertSame(42, $booking->calculatePrice());
        $this->assertSame('double room with wifi', $booking->getDescription());
    }

    /**
     * @test
     */
    public function can_calculate_price_for_double_room_booking_with_wifi_and_extra_bed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        $this->assertSame(72, $booking->calculatePrice());
        $this->assertSame('double room with wifi with extra bed', $booking->getDescription());
    }
}