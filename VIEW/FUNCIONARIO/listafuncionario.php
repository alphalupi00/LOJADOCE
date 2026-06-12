<?php

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
            

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
    <h1>Lista de Funcionários</h1>
    <table class="striped responsive-table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
        <?php foreach ($listafuncionario as $funcionario) { ?>
            <tr>
                <td><?php echo $funcionario->getIdfuncionario(); ?></td>
                <td><?php echo $funcionario->getNome(); ?></td>
                <td><?php echo $funcionario->getNumero(); ?></td>
                <td><?php echo $funcionario->getEmail(); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>