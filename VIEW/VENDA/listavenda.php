<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/venda.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/venda.php";

    use DAL\venda;

    $dalVenda = new Venda();
    $listavenda = $dalVenda->Select();
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
    <title>Vendas</title>
</head>
<body class="#a1887f  brown lighten-4">
    <h1>Vendas Cadastradas</h1>

    <table class="striped responsive-table hover: orange lighten-2">
        <tr>
            <th>ID venda</th>
            <th>Nome do cliente</th>
            <th>Funcionário responsável</th>
            <th>Data da venda</th>
            <th>Total</th>
            <th>Cadastrar venda
                            <!-- botao salvar -->
                <a class="btn-floating btn-small waves-effect waves-light green">
                <i class="material-icons"
                    onclick="javaScript:location.href='inserirvenda.php'">+</i>
                </a>
            </th>
        </tr>
        <?php foreach ($listavenda as $venda) { ?>
            <tr>
                <td><?php echo $venda->getIdvenda(); ?></td>
                <td><?php echo $venda->getIdcliente(); ?></td>
                <td><?php echo $venda->getIdfuncionario(); ?></td>
                <td><?php echo $venda->getDatavenda(); ?></td>
                <td><?php echo 'R$ ' . number_format($venda->getTotal(), 2, ',', '.'); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>