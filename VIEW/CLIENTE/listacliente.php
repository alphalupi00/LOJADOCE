<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/cliente.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/cliente.php";

    use DAL\cliente;

    $dalCliente = new Cliente();
    $listacliente = $dalCliente->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body class="#a1887f  brown lighten-4">
    <h1>Lista de Clientes</h1>

    <table class = "striped responsive-table hover: orange lighten-2">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Numero/Telefone</th>
            <th>Cadastrar Cliente
                            <a class="btn-floating btn-small waves-effect waves-light green" style="margin-left: 10px;">
                    <i class="material-icons" onclick="javaScript:location.href='inserircliente.php'">+</i>
                </a>
            </th>
        </tr>
        <?php foreach ($listacliente as $cliente) { ?>
            <tr>
                <td><?php echo $cliente->getIdcliente(); ?></td>
                <td><?php echo $cliente->getNome(); ?></td>
                <td><?php echo $cliente->getCpf(); ?></td>
                <td><?php echo $cliente->getNumero(); ?></td>
                <td>
                    <a class="btn-floating btn-smal waves-effect pink">
                        <i class="material-icons"
                        onclick="JavaScript:location.href='editarcliente.php?idcliente='+'<?php echo $cliente->getIdcliente(); ?>'">edit
                        </i>
                    </a>

                    <a class="btn-floating btn-smal waves-effect blue">
                        <i class="material-icons"
                        onclick="JavaScript:location.href='detalhecliente.php?idcliente='+'<?php echo $cliente->getIdcliente(); ?>'">details
                        </i>
                    </a>

                    <a class="btn-floating btn-smal waves-effect red">
                        <i class="material-icons"
                        onclick="JavaScript: remover(<?php echo $cliente->getIdcliente(); ?>)">delete</i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<script>
    function remover(idcliente) {
        if (confirm('Excluir Cliente ' + idcliente + '?')){
            location.href = 'removercliente.php?idcliente=' + idcliente;
        }
    }
</script>