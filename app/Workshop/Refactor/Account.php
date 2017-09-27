<?php

namespace App\Workshop\Refactor;


class Account {

    private $type;

    private $balance;

    private $rewardPoints;

    public function __construct(string $type) {
        $this->type = $type;
    }

    public function getBalance(): double {
        return $this->balance;
    }

    public function getRewardPoints(): double {
        return $this->rewardPoints;
    }

    public function addTransaction(double $amount) {
        $this->rewardPoints += $this->calculateRewardPoints($amount);
        $this->balance += $amount;
    }

    public function calculateRewardPoints(float $amount): int {
        $points = null;
        switch ($this->type) {
            case AccountType::Silver:
                $points = (int)floor($amount / 10);
                break;
            case AccountType::Gold:
                $points = (int)floor(($this->balance / 10000 * 5) + ($amount / 5));
                break;
            case AccountType::Platinum:
                $points = (int)ceil(($this->balance / 10000 * 10) + ($amount / 2));
                break;
            default:
                $points = 0;
                break;
        }

        return max($points, 0);
    }

}