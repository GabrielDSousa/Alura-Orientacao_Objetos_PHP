<?php


namespace GabsDSousa\Bank\Model\Account;


class Current extends Account
{

    public function tax(): float
    {
        return 0.05;
    }

    public function transfer(float $value, Account $destination): void
    {
        if ($value < 0) {
            echo "The value for deposit must be more than \$0".PHP_EOL;
            return;
        }

        if ($value > $this->getBalance()) {
            echo "You don't have enough bank balance to this transaction".PHP_EOL;
            return;
        }

        if($this->withdraw($value)){
            $destination->deposit($value);
        }

    }
}