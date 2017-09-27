<?php

namespace App\Workshop\SOLID;

class OrderProcessor {

    public function process(Order $order, string $userID) {
        $this->placeOrder($order, $userID);
        $this->logOrder($order, $userID);
    }

    protected function placeOrder(Order $order, string $userID) {
        //place order in DB
        //Connect DB
        //Write DB
        //..... etc.
    }

    protected function logOrder(Order $order, string $userID) {
        //Log order in DB
        //Connect DB
        //Write DB
        //..... etc.

        throw new Exception("error");
    }

}