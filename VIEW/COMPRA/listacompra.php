<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/compra.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/compra.php";

    use DAL\compra;

    $dalCompra = new Compra();
    $listacompras = $dalCompra->Select();
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
    <title>Compras</title>
</head>
<body class="#a1887f  brown lighten-4">
<<<<<<< HEAD
    <h1>Lista de Compras</h1>
=======
    <h1>Compras Cadastradas</h1>
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959

    <table class = "striped responsive-table hover: orange lighten-2">
        <tr>
            <th>ID Compra</th>
            <th>Funcionario responsável</th>
            <th>Data da compra</th>
            <th>Total</th>
            <th>Cadastrar compra
                            <!-- botao salvar -->
                <a class="btn-floating btn-small waves-effect waves-light green">
                <i class="material-icons"
                    onclick="javaScript:location.href='inserircompra.php'">+</i>
                </a>
            </th>
        </tr>
        <?php foreach ($listacompras as $compra) { ?>
            <tr>
                <td><?php echo $compra->getIdcompra(); ?></td>
                <td><?php echo $compra->getIdfuncionario(); ?></td>
                <td><?php echo $compra->getdatacompra(); ?></td>
<<<<<<< HEAD
                <td><?php echo $compra->getTotal(); ?></td>
=======
                <td><?php echo 'R$ ' . number_format($compra->getTotal(), 2, ',', '.'); ?></td>
                
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959

            </tr>
        <?php } ?>
    </table>
</body>
</html>