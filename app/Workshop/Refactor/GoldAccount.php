<?php

namespace App\Workshop\Refactor;

class GoldAccount extends AccountBase {

    const GOLD_AMOUNT_POINT = 5;
    const GOLD_BALANCE_POINT = 2000;

    public function calculateRewardPoints(float $amount): int {
        return (int)floor(($this->getBalance() / static::GOLD_BALANCE_POINT) +
            ($amount / static::GOLD_AMOUNT_POINT));
    }

}