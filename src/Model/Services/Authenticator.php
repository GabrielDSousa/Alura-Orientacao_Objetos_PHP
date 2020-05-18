<?php


namespace GabsDSousa\Bank\Model\Services;


use GabsDSousa\Bank\Model\Authentic;

class Authenticator
{
    public function login(Authentic $authentic, string $password): void
    {
        if ($authentic->auth($password)) {
            echo "Ok. User authorized".PHP_EOL;
        } else {
            echo "Incorrect password".PHP_EOL;
        }
    }
}