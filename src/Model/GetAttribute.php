<?php


namespace GabsDSousa\Bank\Model;


trait GetAttribute
{
    public function __get(string $attribute)
    {
        $method = 'get' . ucfirst($attribute);
        return $this->$method();
    }
}