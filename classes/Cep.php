<?php

class Cep
{
    public $cep;

    public function __construct(){}


    public function getCep()
    {
        return (int)$this->cep;
    }
    
    public function setCep($cep)
    {
        $cep = preg_replace( '/[^0-9]/', '', $cep);
        $this->cep = $cep;
    }
}