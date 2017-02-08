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
                $blackCat = new BlackCat();
                $amount = $blackCat->calculateFee($weightArray, $amount);
                break;
            case 'Hsinchu':
                $hsinchu = new Hsinchu();
                $amount = $hsinchu->calculateFee($weightArray, $amount);
                break;
            case 'PostOffice':
                $post   = new Post();
                $amount = $post  ->calculateFee($weightArray, $amount);
                break;
            default :
                $blackCat = new BlackCat();
                $amount = $blackCat->calculateFee($weightArray, $amount);
                break;
        }

        return $amount;
    }
}