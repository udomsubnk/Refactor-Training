<?php

namespace App\Workshop\Refactor;

class PlatinumAccount extends AccountBase {

    const PLATINUM_AMOUNT_POINT = 2;
    const PLATINUM_BALANCE_POINT = 1000;

    public function calculateRewardPoints(float $amount): int {
        return (int)floor(($this->getBalance() / static::PLATINUM_BALANCE_POINT) +
            ($amount / static::PLATINUM_AMOUNT_POINT));
    }

}