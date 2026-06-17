<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/fornecedor.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/fornecedor.php";

//passagem de valores entre paginas WEB, atraves do metodo POST
    $fornecedor = new \MODEL\Fornecedor();

    $fornecedor->setDescricao($_POST['descricao']);
    $fornecedor->setCnpj($_POST['cnpj']);

    $dalFornecedor = new \DAL\Fornecedor();
    $dalFornecedor->Insert($fornecedor);

    header("Location: listafornecedor.php");

?>