<?php


namespace GabsDSousa\Bank\Model\Services;


use GabsDSousa\Bank\Model\Employee\Employee;

class BonusController
{
    private float $totalBonus = 0;

    public function addBonus(Employee $employee): void
    {
        $this->totalBonus += $employee->calcBonus();
    }

    public function getTotalBonus(): float
    {
        return $this->totalBonus;
    }

}