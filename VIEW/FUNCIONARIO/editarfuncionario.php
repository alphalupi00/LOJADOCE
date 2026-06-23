<?php

    $idfuncionario = $_GET['idfuncionario'] ;
    //echo $idfuncionario;


    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/funcionario.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/funcionario.php";

    use DAL\Funcionario;

    $dalFuncionario = new DAL\Funcionario();
    $funcionario = $dalFuncionario->SelectById($idfuncionario);
?>

<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar funcionário</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Editar funcionário</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoeditarfuncionario.php" method="post" class="col s10">

                <input type="hidden" name="idfuncionario" value="<?php echo $funcionario->getIdfuncionario(); ?>">

                <div class="input-field col s8">
                    <input placeholder="Informe o nome" id="nome" name="nome" type="text" class="validate"
                    value="<?php echo $funcionario->getNome(); ?>">
                    <label for="nomelabel">Nome: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o número/telefone" id="numero" name="numero" type="text" class="validate"
                    value="<?php echo $funcionario->getNumero(); ?>">
                    <label for="numerolabel">Número/Telefone: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o email" id="email" name="email" type="text" class="validate"
                    value="<?php echo $funcionario->getEmail(); ?>">
                    <label for="emaillabel">Email: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a senha" id="senha" name="senha" type="password" class="