<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/funcionario.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/funcionario.php";

    use DAL\funcionario;

    $dalFuncionario = new Funcionario();
    $listafuncionario = $dalFuncionario->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- para usar icones na pagina -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body class="#a1887f  brown lighten-4">
    <h1>Lista de Funcionários</h1>

    <table class="striped responsive-table hover: orange lighten-2">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Cadastrar funcionário
                <!-- botao salvar -->
                 <a class="btn-floating btn-small waves-effect waves-light green">
                    <i class="material-icons" onclick="javaScript:location.href='inserirfuncionario.php'">+</i>
                </a>
            </th>
        </tr>
        <?php foreach ($listafuncionario as $funcionario) { ?>
            <tr>
                <td><?php echo $funcionario->getIdfuncionario(); ?></td>
                <td><?php echo $funcionario->getNome(); ?></td>
                <td><?php echo $funcionario->getNumero(); ?></td>
                <td><?php echo $funcionario->getEmail(); ?></td>
                <td></td> </tr>
            </tr>
        <?php } ?>
    </table>
</body>
</html>