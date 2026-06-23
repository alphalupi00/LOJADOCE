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
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- para usar icones na pagina -->
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
            <th>Cadastrar cliente
                            <!-- botao salvar -->
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
                <td></td> </tr>
            </tr>
        <?php } ?>
    </table>
</body>
</html>