<?php


namespace GabsDSousa\Bank\Model;


interface Authentic
{
    public function auth(string $password): bool;
}