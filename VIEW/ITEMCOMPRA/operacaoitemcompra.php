<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/itemcompra.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/itemcompra.php";

//passagem de valores entre paginas WEB, atraves do metodo POST
    $itemcompra = new \MODEL\Itemcompra();

    $itemcompra->setIdcompra($_POST['idcompra']);
    $itemcompra->setIdproduto($_POST['idproduto']);
    $itemcompra->setQuantidade($_POST['quantidade']);
    $itemcompra->setPreco_unitario($_POST['preco_unitario']);

    $dalItemcompra = new \DAL\Itemcompra();
    $dalItemcompra->Insert($itemcompra);

    header("Location: listaitemcompra.php");

?>