<?php

namespace App\Services;

class Hsinchu
{
    /**
     * @param array $weightArray
     * @param int $amount
     * @return int
     */
    public function calculateFee(array $weightArray, $amount)
    {
        $weights = collect($weightArray);

        foreach ($weights as $weight) {
            $amount = $amount + (80 + $weight * 15);
        }

        return $amount;
    }
}