<?php 

namespace App\Services;

class BlackCat extends AbstractLogistics
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
            $amount = $amount + (100 + $weight * 10);
        }

        return $amount;
    }
}

