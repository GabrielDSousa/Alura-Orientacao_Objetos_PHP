<?php


namespace GabsDSousa\Bank\Model\Employee;


use GabsDSousa\Bank\Model\Authentic;

class Manager extends Employee implements Authentic
{
    public function calcBonus(): float
    {
        return $this->getSalary();
    }

    public function auth(string $password): bool
    {
        return $password==='4321';
    }
}