<?php

namespace App\Workshop\Refactor;


interface IAccountFactory{
    
    public function createAccount(string $type) : AccountBase;
}