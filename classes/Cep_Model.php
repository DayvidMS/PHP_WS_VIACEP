<?php
ini_set('error_reporting', E_ALL);
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

    /**
     *
     */
    public function save(Cep $cep)
    {
        $data = [
            $cep->getCep(),
            $cep->getLogradouro(),
            $cep->getComplemento(),
            $cep->getBairro(),
            $cep->getLocalidade(),
            $cep->getUf(),
            $cep->getIbge(),
            $cep->getGia(),
            $cep->getDdd(),
            $cep->getSiafi(),
        ];

        $conn = Database::conexao();
        $sql = <<<SQL
        INSERT INTO cep(
            cep,logradouro, complemento, bairro, localidade, uf, ibge, gia, ddd, siafi
        )
        VALUES (?,?,?,?,?,?,?,?,?,?)
        SQL;
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
    }

    /**
     * @description <Verifica se o CEP já foi consultado, se foi consultado ele traz os dados do cep do banco>
     */
    public function verificaCep($cep)
    {
        $conn = Database::conexao();
        //faz a busca do CEP no banco
        $stmt = $conn->prepare('SELECT 
            cep,logradouro, complemento, bairro, localidade, uf, ibge, gia, ddd, siafi
         FROM cep WHERE cep = :cep');
        $stmt->execute(array('cep' => $cep));

        //Traz o resultado da consulta
        $result = $stmt->fetchObject(Cep::class, ['cep']);


        //faz a condição para a verificação se o cep já foi verificado ou não.
        if (!$result) {
            return false;
        }
        return $result;
    }
}
