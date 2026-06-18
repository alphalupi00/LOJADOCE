<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/venda.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/venda.php";

    $venda = new \MODEL\Venda();
    $venda->setIdcliente($_POST['idcliente']);
    $venda->setIdfuncionario($_POST['idfuncionario']);
    $venda->setDatavenda($_POST['datavenda']); 
    $venda->setTotal($_POST['total']);


    $dalVenda = new \DAL\Venda();
    $dalVenda->Insert($venda);

    header("Location: listavenda.php");

?>