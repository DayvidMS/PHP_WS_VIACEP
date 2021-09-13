<?php

require_once "database.php";
require_once "Cep.php";

class Cep_Model extends Database
{
    
    private $conection;

    public function __construct()
    {
        //Retorna a conexão com o banco de dados
        // $this->conection = $this->returnConnection();
    }

    public function save(Cep $cep)
    {
        $conn = Database::conexao();
        $sql = <<<SQL
        INSERT INTO ceps(
            cep
        )
        VALUES (?)
        SQL; 
        $stmt = $conn->prepare($sql);
        $stmt->execute([$cep->getCep()]);
    }

   /**
    * @description <Verifica se o CEP já foi consultado, se foi consultado ele traz os dados do cep do banco>
    */
    public function verificaCep($cep)
    {
        $conn = Database::conexao();
        //faz a busca do CEP no banco
        $stmt = $conn->prepare('SELECT cep FROM ceps WHERE cep = :cep');
        $stmt->execute(array('cep' => $cep));

        //Traz o resultado da consulta
        $result = $stmt->fetchObject(Cep::class,['cep']);

        //faz a condição para a verificação se o cep já foi verificado ou não.
        if (!$result) {
            return false;
        }
        return $result;
    }
}