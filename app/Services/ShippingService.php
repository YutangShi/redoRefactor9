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

        switch ($companyName){
            case 'BlackCat':
                $weights = collect($weightArray);
                
                foreach ($weights as $weight) {
                    $amount = $amount + (100 + $weight * 10);
                }
                break;
            case 'Hsinchu':
                $weights = collect($weightArray);
                
                foreach ($weights as $weight) {
                    $amount = $amount + (80 + $weight * 15);
                }
                break;
            case 'PostOffice':
                $weights = collect($weightArray);
                
                foreach ($weights as $weight) {
                    $amount = $amount + (60 + $weight * 20);
                }
                break;
            default :
                $weights = collect($weightArray);
                
                foreach ($weights as $weight) {
                    $amount = $amount + (100 + $weight * 10);
                }
                break;
        }

        return $amount;
    }
}