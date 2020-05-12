<?php


class Holder
{
    private SSN $ssn;
    private string $name;

    public function __construct(SSN $ssn, string $name)
    {
        $this->ssn = $ssn;
        $this->validateName($name);
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSsn(): SSN
    {
        return $this->ssn;
    }

    private function validateName(string $name)
    {
        if (strlen($name) < 5) {
            echo "Name need to have at minimum 5 characters";
            exit();
        }
    }


}