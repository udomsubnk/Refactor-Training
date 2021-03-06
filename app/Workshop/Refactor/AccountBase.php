<?php

namespace App\Workshop\Refactor;

abstract class AccountBase {

    private $balance = 0;

    private $rewardPoints;

    /* Method refactoring*/
    public static function createAccount(string $type) {
        $fact = new AccountFactory();
        return $fact->createAccount($type);
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
