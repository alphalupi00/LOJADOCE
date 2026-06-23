<?php
   $idfuncionario = $_GET['idfuncionario'];

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/funcionario.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/funcionario.php";
    
    $idfuncionario = $_GET['idfuncionario'];

    $dalfuncionario = new DAL\Funcionario();
    $dalfuncionario->Delete($idfuncionario);
    header("location: listafuncionario.php");

?>