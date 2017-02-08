<?php

use Tests\TestCase;
use App\Services\ShippingService;

class ShippingServiceTest extends TestCase
{
    /** @test */
    public function blackCat()
    {
        /** arrange */
        /** @var ShippingService $target */
        $target = App::make(ShippingService::class);

        /** act */
        $weights = [1, 2, 3];
        $actual = $target->calculateFee($weights, 'BlackCat');

        /** assert */
        $expected = 360;
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function Hsinchu()
    {
        /** arrange */
        /** @var ShippingService $target */
        $target = App::make(ShippingService::class);

        /** act */
        $weights = [1, 2, 3];
        $actual = $target->calculateFee($weights, 'Hsinchu');

        /** assert */
        $expected = 330;
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function Postoffice()
    {
        /** arrange */
        /** @var ShippingService $target */
        $target = App::make(ShippingService::class);

        /** act */
        $weights = [1, 2, 3];
        $actual = $target->calculateFee($weights, 'PostOffice');

        /** assert */
        $expected = 300;
        $this->assertEquals($expected, $actual);
    }
}