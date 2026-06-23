<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/cliente.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/cliente.php";

//passagem de valores entre paginas WEB, atraves do metodo POST
    $cliente = new \MODEL\Cliente();
    $cliente->setIdcliente($_POST['idcliente']);
    $cliente->setNome($_POST['nome']);
    $cliente->setCpf($_POST['cpf']);
    $cliente->setNumero($_POST['numero']);

    $dalCliente = new \DAL\Cliente();
    $dalCliente->Update($cliente);

    header("Location: listacliente.php");

?>