<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/fornecedor.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/fornecedor.php";

    $fornecedor = new \MODEL\Fornecedor();
    $fornecedor->setIdfornecedor($_POST['idfornecedor']);
    $fornecedor->setDescricao($_POST['descricao']);
    $fornecedor->setCnpj($_POST['cnpj']);

    $dalFornecedor = new \DAL\Fornecedor();
    $dalFornecedor->Update($fornecedor);

    header("Location: listafornecedor.php");

?>