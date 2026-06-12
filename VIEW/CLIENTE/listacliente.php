<?php

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
            

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <table class = "striped responsive-table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Numero/Telefone</th>
        </tr>
        <?php foreach ($listacliente as $cliente) { ?>
            <tr>
                <td><?php echo $cliente->getIdcliente(); ?></td>
                <td><?php echo $cliente->getNome(); ?></td>
                <td><?php echo $cliente->getCpf(); ?></td>
                <td><?php echo $cliente->getNumero(); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>