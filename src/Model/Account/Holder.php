<?php
namespace GabsDSousa\Bank\Model\Account;

use GabsDSousa\Bank\Model\Address;
use GabsDSousa\Bank\Model\Authentic;
use GabsDSousa\Bank\Model\Person;
use GabsDSousa\Bank\Model\SSN;

class Holder extends Person implements Authentic
{
    private Address $address;

    public function __construct(SSN $ssn, string $name, Address $address)
    {
        parent::__construct($ssn, $name);
        $this->address = $address;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function auth(string $password): bool
    {
        return $password==='qwert';
    }
}