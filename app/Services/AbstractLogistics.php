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
}