<?php


namespace GabsDSousa\Bank\Model\Account;


class Savings extends Account
{

    public function tax(): float
    {
        return 0.03;
    }
}