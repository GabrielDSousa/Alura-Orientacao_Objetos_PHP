<?php
namespace GabsDSousa\Bank\Model;

/**
 * Class Address
 * @package GabsDSousa\Bank\Model
 * @property-read string $city
 * @property-read string $street
 * @property-read string $number
 * @property-read string $poBox
 */

final class Address
{

    use GetAttribute;

    private string $city;
    private string $street;
    private string $number;
    private string $poBox;

    public function __construct(string $city, string $street, string $number, string $poBox)
    {
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
        $this->poBox = $poBox;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getPoBox(): string
    {
        return $this->poBox;
    }

    public function __toString(): string
    {
        return "Street: {$this->getStreet()}, {$this->getNumber()}, POBox: {$this->getPoBox()}, {$this->getCity()}".PHP_EOL;
    }

//    public function __get(string $attribute)
//    {
//        $method = 'get' . ucfirst($attribute);
//        return $this->$method();
//    }

}