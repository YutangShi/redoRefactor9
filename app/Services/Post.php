<?php 

namespace App\Services;

class Post
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
            $amount = $amount + (60 + $weight * 20);
        }

        return $amount;
    }
}