<?php

class Cep
{
    public $cep;
    public $bairro;
    public $complemento;
    public $ddd;
    public $gia;
    public $ibge;
    public $localidade;
    public $logradouro;
    public $siafi;
    public $uf;

    public function __construct()
    {
    }

    #Propriedade CEP
    public function getCep()
    {
        return (int)$this->cep;
    }

    public function setCep($cep)
    {
        $cep = preg_replace('/[^0-9]/', '', $cep);
        $this->cep = $cep;
    }
    #propriedade Bairro
    public function getBairro()
    {
        return (string)$this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    #Propriedade Complemento
    public function getComplemento()
    {
        return (string)$this->complemento;
    }

    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }
    #propriedade ddd
    public function getDdd()
    {
        return (int)$this->ddd;
    }

    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }
    #Propriedade Gia
    public function getGia()
    {
        return (int)$this->gia;
    }

    public function setGia($gia)
    {
        $this->gia = $gia;
    }
    #Propriedade ibge
    public function getIbge()
    {
        return (int)$this->ibge;
    }

    public function setIbge($ibge)
    {
        $this->ibge = $ibge;
    }
    #Propriedade Localidade
    public function getLocalidade()
    {
        return (string)$this->localidade;
    }

    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;
    }
    #Propriedade Logradouro
    public function getLogradouro()
    {
        return (string)$this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }
    #Propriedade Siafi
    public function getSiafi()
    {
        return (int)$this->siafi;
    }

    public function setSiafi($siafi)
    {
        $this->siafi = $siafi;
    }
    #Propriedade UF
    public function getUf()
    {
        return (string)$this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }
}
