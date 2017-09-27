<?php

namespace App\Workshop\Refactor;

class SilverAccount extends AccountBase{

    const SILVER_AMOUNT_POINT = 10;
    
    public function calculateRewardPoints(float $amount): int {
        return (int)floor($amount / static::SILVER_AMOUNT_POINT);
    }
}