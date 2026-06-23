<?php
    $idproduto = $_GET['idproduto'] ;
    //echo $idproduto;

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/produto.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/produto.php";
    


     
    $idproduto = $_GET['idproduto'];

    $dalProduto = new DAL\Produto();
    $dalProduto->Delete($idproduto);
    header("location: listaproduto.php");

?>