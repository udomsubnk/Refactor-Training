<?php

namespace Tests\Unit;

use App\Workshop\Refactor\AccountBase;
use App\Workshop\Refactor\AccountType;
use App\Workshop\Refactor\GoldAccount;
use App\Workshop\Refactor\PlatinumAccount;
use App\Workshop\Refactor\SilverAccount;
use Tests\TestCase;

class AccountTest extends TestCase {

    /** @test */
    public function calculate_silver_reward_points() {
        $silver = AccountBase::createAccount(AccountType::Silver);
        $reward = $silver->calculateRewardPoints(1000);
        $this->assertEquals(100, $reward);
    }

    /** @test */
    public function calculate_gold_reward_points() {
        $silver = AccountBase::createAccount(AccountType::Gold);
        $reward = $silver->calculateRewardPoints(1000);
        $this->assertEquals(200, $reward);
    }

    /** @test */
    public function calculate_platinum_reward_points() {
        $silver = AccountBase::createAccount(AccountType::Platinum);
        $reward = $silver->calculateRewardPoints(1000);
        $this->assertEquals(500, $reward);
    }


//    /** @test */
//    public function calculate_reward_points() {
//        $silver = new Account(AccountType::Silver);
//        $reward = $silver->calculateRewardPoints(1000);
//        $this->assertEquals(100, $reward);
//    }
}
