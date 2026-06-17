<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/funcionario.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/funcionario.php";

//passagem de valores entre paginas WEB, atraves do metodo POST
    $funcionario = new \MODEL\Funcionario();

    $funcionario->setNome($_POST['nome']);
    $funcionario->setNumero($_POST['numero']);
    $funcionario->setEmail($_POST['email']);
    $funcionario->setSenha($_POST['senha']);

    $dalFuncionario = new \DAL\Funcionario();
    $dalFuncionario->Insert($funcionario);

    header("Location: listafuncionario.php");

?>