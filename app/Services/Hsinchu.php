<?php

namespace App\Services;

class Hsinchu extends AbstractLogistics
{
    /**
     * @param array $weightArray
     * @param int $amount
     * @return int
     */
    public function calculateFee(array $weightArray, $amount)
    {
        $weights = $this->arrayToCollection($weightArray);

        $amount = $this->loopWeights($amount, $weights, function ($weight) {
            return (80 + $weight * 15);
        });

        return $amount;
    }
}