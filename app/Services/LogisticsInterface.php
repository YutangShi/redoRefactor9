<?php
namespace App\Services;

interface LogisticsInterface
{
    /**
     * @param array $weightArray
     * @param int $amount
     * @return int
     */
    public function calculateFee(array $weightArray, $amount);
}