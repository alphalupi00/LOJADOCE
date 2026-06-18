<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/compra.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/compra.php";

    $compra = new \MODEL\Compra();
    $compra->setIdfornecedor($_POST['id fornecedor']);
    $compra->setIdfuncionario($_POST['idfuncionario']);
    $compra->setDatacompra($_POST['datavenda']); 
    $compra->setTotal($_POST['total']);


    $dalCompra = new \DAL\Compra();
    $dalCompra->Insert($compra);

    header("Location: listacompra.php");

?>