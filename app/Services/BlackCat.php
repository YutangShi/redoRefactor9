<?php 

namespace App\Services;

class BlackCat
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
            $amount = $amount + (100 + $weight * 10);
        }

        return $amount;
    }
}

