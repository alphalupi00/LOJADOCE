<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/itemvenda.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/itemvenda.php";

//passagem de valores entre paginas WEB, atraves do metodo POST
    $itemvenda = new \MODEL\Itemvenda();

    $itemvenda->setIdvenda($_POST['idvenda']);
    $itemvenda->setIdproduto($_POST['idproduto']);
    $itemvenda->setQuantidade($_POST['quantidade']);
    $itemvenda->setPreco_unitario($_POST['preco_unitario']);

    $dalItemvenda = new \DAL\Itemvenda();
    $dalItemvenda->Insert($itemvenda);

    header("Location: listaitemvenda.php");

?>