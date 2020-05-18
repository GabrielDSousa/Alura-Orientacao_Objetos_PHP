<?php


namespace GabsDSousa\Bank\Model\Employee;


use GabsDSousa\Bank\Model\Authentic;

class Director extends Employee implements Authentic
{
    public function calcBonus(): float
    {
        return $this->getSalary()*2;
    }

    public function auth(string $password): bool
    {
        return $password === '1234';
    }
}