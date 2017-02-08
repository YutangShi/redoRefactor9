<?php
namespace App\Services;

class ShippingService
{

    /**
     * 計算運費
     * @param array $weightArray
     * @param LogisticsInterface $logistics
     * @return int
     */
    public function calculateFee(array $weightArray, LogisticsInterface $logistics) 
    {
        $amount = 0;

        return $logistics->calculateFee($weightArray, $amount);
    }

}