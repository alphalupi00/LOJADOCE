<?php
   $idfornecedor = $_GET['idfornecedor'];

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/fornecedor.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/fornecedor.php";
    
    $idfornecedor = $_GET['idfornecedor'];

    $dalFornecedor = new DAL\Fornecedor();
    $dalFornecedor->Delete($idfornecedor);
    header("location: listafornecedor.php");

?>