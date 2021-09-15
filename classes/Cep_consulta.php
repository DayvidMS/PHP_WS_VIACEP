<?php


require_once 'Cep_Controller.php';
require_once 'Cep.php';

$ctrCep = new Cep_Controller();
$cep = new Cep();

switch ($_GET['requisicao']) {
    case 'verificaCep':
        ob_clean();
        $cep = $ctrCep->verificaCep($_GET['cep']);
        echo json_encode($cep);
        // print_r($ctrCep->verificaCep($_GET['cep']));
        exit();
        break;
    default:
}
