<?php
session_start();

if(!isset($_SESSION['contatos'])) {
    $_SESSION['contatos'] = array();
}

$dados = array('nome'     => $_REQUEST['nome'], 
               'telefone' => $_REQUEST['telefone'], 
               'cidade'   => $_REQUEST['cidade']);

array_push($_SESSION['contatos'], $dados);

//unset($_SESSION['contatos']);


