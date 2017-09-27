<?php

namespace App\Workshop\Refactor;


class Account {

    private $type;

    private $balance;

    private $rewardPoints;

    const SILVER_TRANS_COST_PER_POINT = 10;
    const GOLD_TRANS_COST_PER_POINT = 5;
    const PLATINUM_TRANS_COST_PER_POINT = 2;

    const GOLD_BALANCE_COST_PER_POINT = 2000;
    const PLATINUM_BALANCE_COST_PER_POINT = 1000;

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
                $points = (int)floor($amount /
                    static::SILVER_TRANS_COST_PER_POINT);
                break;
            case AccountType::Gold:
                $points = (int)floor(($this->balance /
                        static::GOLD_BALANCE_COST_PER_POINT) +
                    ($amount / static::GOLD_TRANS_COST_PER_POINT));
                break;
            case AccountType::Platinum:
                $points = (int)ceil(($this->balance /
                        static::PLATINUM_BALANCE_COST_PER_POINT) +
                    ($amount / static::PLATINUM_TRANS_COST_PER_POINT));
                break;
            default:
                $points = 0;
                break;
        }

        return max($points, 0);
    }

}