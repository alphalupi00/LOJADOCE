<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/produto.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/produto.php";

//passagem de valores entre paginas WEB, atraves do metodo POST
    $produto = new \MODEL\Produto();
    $produto->setDescricao($_POST['descricao']);
    $produto->setPreco($_POST['preco']);
    $produto->setQtdestoque($_POST['qtdestoque']); 
    $produto->setQtdminima($_POST['qtdminima']);
    $produto->setQtdmaxima($_POST['qtdmaxima']);

    $dalProduto = new \DAL\Produto();
    $dalProduto->Insert($produto);

    header("Location: listaproduto.php");

    //debug
    //echo "Produto: " . $produto->getDescricao();
?>