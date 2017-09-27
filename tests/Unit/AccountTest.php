<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Workshop\Refactor\Account;
use App\Workshop\Refactor\AccountType;

use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountTest extends TestCase
{
	/** @test **/
    public function calculate_reward_points()
    {
    	$silver = new Account(AccountType::Silver);
		$reward = $silver->calculateRewardPoints(1000.0);

		$this->assertEquals(100,$reward);
        // $this->assertTrue(true);
    }
}
