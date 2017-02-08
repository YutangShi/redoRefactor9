<?php

namespace App\Services;

use Illuminate\Support\Collection;

abstract class AbstractLogistics
{
    /**
     * @param array $weightArray
     * @return Collection
     */
    protected function arrayToCollection(array $weightArray)
    {
        $weights = collect($weightArray);

        return $weights;
    }

    /**
     * @param int $amount
     * @param Collection $weights
     * @param callable $closure
     * @return int
     */
    protected function loopWeights($amount, Collection $weights, callable $closure)
    {
        foreach ($weights as $weight) {
            $amount = $amount + $closure($weight);
        }

        return $amount;
    }
}