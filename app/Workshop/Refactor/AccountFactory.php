<?php

namespace App\Workshop\Refactor;


class AccountFactory extends IAccountFactory {
    
    public function createAccount(string $type) : AccountBase{
        switch($type){
            case AccountType::silver : 
                return new SilverAccount();
            case AccountType::Gold : 
                return new GoldAccount();
            case AccountType::Pattinum : 
                return new PattinumAccount();
        }
    }
}