<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Workshop\SOLID\Order;
use App\Workshop\SOLID\OrderProcessor;


class OrderRepositoryTest extends TestCase
{
    /** @test **/
    public function process_test(){
        $op = new OrderProcessor();
        $order = new Order();
        $op->process($order, '123');
    }
}
