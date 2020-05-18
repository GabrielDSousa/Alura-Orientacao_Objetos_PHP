<?php
namespace GabsDSousa\Bank\Model;

final class SSN
{
    private string $number;

    public function __construct(string $number)
    {
        $number = filter_var($number, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^(?!\b(\d)\1+-(\d)\1+-(\d)\1+\b)(?!123-45-6789|219-09-9999|078-05-1120)(?!666|000|9\d{2})\d{3}-(?!00)\d{2}-(?!0{4})\d{4}$/'
            ]
        ]);
        if ($number === false) {
            echo "invalid SSN";
            exit();
        }
        $this->number = $number;
    }

    public function getNumber(): string
    {
        return $this->number;
    }
}