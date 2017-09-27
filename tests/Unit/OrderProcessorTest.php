<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Workshop\SOLID\Order;
use App\Workshop\SOLID\OrderProcessor;


class OrderProcessorTest extends TestCase
{
    /** @test **/
    public function process_test(){
        $repo = new OrderRepository();
        $op = new OrderProcessor($repo);
        $op->process($order, '123');
        $this->assertTrue(true);
    }
}
