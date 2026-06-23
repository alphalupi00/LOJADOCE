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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

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
                <td>
                    <a class="btn-floating btn-smal waves-effect pink">
                        <i class="material-icons"
                        onclick="JavaScript:location.href='editarfuncionario.php?idfuncionario='+'<?php echo $funcionario->getIdfuncionario(); ?>'">edit
                        </i>
                    </a>

                    <a class="btn-floating btn-smal waves-effect blue">
                        <i class="material-icons"
                        onclick="JavaScript:location.href='detalhefuncionario.php?idfuncionario='+'<?php echo $funcionario->getIdfuncionario(); ?>'">details
                        </i>
                    </a>

                    <a class="btn-floating btn-smal waves-effect red">
                        <i class="material-icons"
                        onclick="JavaScript: remover(<?php echo $funcionario->getIdfuncionario(); ?>)">delete</i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<script>
    function remover(idfuncionario) {
        if (confirm('Excluir Funcionário ' + idfuncionario + '?')){
            location.href = 'removerfuncionario.php?idfuncionario=' + idfuncionario;
        }
    }
</script>