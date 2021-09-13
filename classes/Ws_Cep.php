<?php
require_once "Cep.php";

class Ws_Cep
{
    public function searchCep($cep): ?Cep
    {
        // create curl resource
        $curl = curl_init();

        // set url
        curl_setopt($curl, CURLOPT_URL, "https://viacep.com.br/ws/${cep}/xml");
        $headers = array(
            "X-Custom-Header: value",
            "Content-Type: application/json",
         );
         curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //return the transfer as a string
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($curl);

        // close curl resource to free up system resources
        curl_close($curl); 
        $xml = simplexml_load_string($output);

        $cep = new Cep();

        $cep->setCep($xml->cep);
         
        return $cep;
    }
}