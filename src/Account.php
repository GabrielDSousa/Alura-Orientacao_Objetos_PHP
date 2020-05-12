<?php


class Account
{
    private Holder $holder;
    private float $balance;
    private static int $accountCount = 0;

    public function __construct(Holder $holder)
    {
        $this->holder = $holder;
        $this->balance = 0;
        self::$accountCount++;
    }

    public function __destruct()
    {
        self::$accountCount--;
    }

    public static function getAccountCount(): int
    {
        return self::$accountCount;
    }

    public function withdraw(float $value): void
    {
        if ($value > $this->balance) {
            echo "You don't have enough bank balance to this transaction";
            return;
        }

        $this->balance -= $value;
    }

    public function deposit(float $value): void
    {
        if ($value < 0) {
            echo "The value for deposit must be more than \$0";
            return;
        }

        $this->balance += $value;
    }

    public function transfer(float $value, Account $destination): void
    {
        if ($value < 0) {
            echo "The value for deposit must be more than \$0";
            return;
        }

        if ($value > $this->balance) {
            echo "You don't have enough bank balance to this transaction";
            return;
        }

        $this->withdraw($value);
        $destination->deposit($value);
    }


    public function getHolder(): Holder
    {
        return $this->holder;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }


}