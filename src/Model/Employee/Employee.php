<?php
namespace GabsDSousa\Bank\Model\Employee;

use GabsDSousa\Bank\Model\Person;
use GabsDSousa\Bank\Model\SSN;

abstract class Employee extends Person
{
    private float $salary;

    public function __construct(string $name, SSN $ssn, float $salary)
    {
        parent::__construct($ssn, $name);
        $this->salary = $salary;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function calcBonus(): float
    {
        return $this->salary * 0.1;
    }

}