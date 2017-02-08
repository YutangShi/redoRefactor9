<?php 

namespace App\Services;

class Post extends AbstractLogistics
{
    /**
     * @param array $weightArray
     * @param int $amount
     * @return int
     */
    public function calculateFee(array $weightArray, $amount)
    {
        $weights = $this->arrayToCollection($weightArray);

        foreach ($weights as $weight) {
            $amount = $amount + (60 + $weight * 20);
        }

        return $amount;
    }
}