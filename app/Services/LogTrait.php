<?php

namespace App\Services;

use Log;

trait LogTrait
{
    public function writeLog($amount)
    {
        Log::info('Amount : ' . $amount);
    }
}