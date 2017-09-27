<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Workshop\Refactor\Account;
use App\Workshop\Refactor\AccountType;
use App\Workshop\Refactor\SilverAccount;
use App\Workshop\Refactor\GoldAccount;
use App\Workshop\Refactor\PlatinumAccount;

use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountTest extends TestCase
{
	/** @test **/
    public function calculate_silver_reward_points()
    {
    	$silver = new SilverAccount();
		$reward = $silver->calculateRewardPoints(1000);
		$this->assertEquals(100,$reward);
    }
    /** @test **/
    public function calculate_gold_reward_points() {
        $silver = new GoldAccount();
        $reward = $silver->calculateRewardPoints(1000);
        $this->assertEquals(200, $reward);
    }
    /** @test */
    public function calculate_platinum_reward_points() {
        $platinum = new PlatinumAccount();
        $reward = $platinum->calculateRewardPoints(1000);
        $this->assertEquals(500, $reward);
    }
}