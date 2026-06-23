<?php
   $idcliente = $_GET['idcliente'];

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/cliente.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/cliente.php";
    
    $idcliente = $_GET['idcliente'];

    $dalcliente = new DAL\Cliente();
    $dalcliente->Delete($idcliente);
    header("location: listacliente.php");

?>