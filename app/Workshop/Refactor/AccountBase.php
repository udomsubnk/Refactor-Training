<?php

namespace App\Workshop\Refactor;

abstract class AccountBase {

    private $balance = 0;

    private $rewardPoints;

    public static function createAccount(string $type) {
        switch ($type) {
            case AccountType::Silver:
                return new SilverAccount();
            case AccountType::Gold:
                return new GoldAccount();
            case AccountType::Platinum:
                return new PlatinumAccount();
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function getRewardPoints(): float {
        return $this->rewardPoints;
    }

    public function addTransaction(float $amount) {
        $this->rewardPoints += $this->calculateRewardPoints($amount);
        $this->balance += $amount;
    }

    public abstract function calculateRewardPoints
    (float $amount): int;

}