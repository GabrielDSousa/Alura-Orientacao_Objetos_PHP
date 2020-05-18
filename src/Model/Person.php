<?php
namespace GabsDSousa\Bank\Model;

class Person
{
    private SSN $ssn;
    protected string $name;

    public function __construct(SSN $ssn, string $name)
    {
        $this->ssn = $ssn;
        $this->validateName($name);
        $this->name = $name;
    }

    public function getSsn(): string
    {
        return $this->ssn->getNumber();
    }

    public function getName(): string
    {
        return $this->name;
    }

    final private function validateName(string $name): void
    {
        if (strlen($name) < 5) {
            echo "Name need to have at minimum 5 characters".PHP_EOL;
            exit();
        }
    }



}