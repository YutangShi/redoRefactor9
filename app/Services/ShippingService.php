<?php
namespace App\Services;

class ShippingService
{
    /**
     * 計算運費
     * @param array $weightArray
     * @param string $companyName
     * @return int
     */
    public function calculateFee(array $weightArray, $companyName)
    {
        $amount = 0;

        if ($companyName == 'BlackCat') {
            $weights = collect($weightArray);

            foreach ($weights as $weight) {
                $amount = $amount + (100 + $weight * 10);
            }
        } elseif ($companyName == 'Hsinchu') {
            $weights = collect($weightArray);

            foreach ($weights as $weight) {
                $amount = $amount + (80 + $weight * 15);
            }
        } else if ($companyName == 'PostOffice') {
            $weights = collect($weightArray);

            foreach ($weights as $weight) {
                $amount = $amount + (60 + $weight * 20);
            }
        } else {
            $weights = collect($weightArray);

            foreach ($weights as $weight) {
                $amount = $amount + (100 + $weight * 10);
            }
        }

        return $amount;
    }
}