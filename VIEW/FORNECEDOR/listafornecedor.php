<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/fornecedor.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/fornecedor.php";

    use DAL\fornecedor;

    $dalFornecedor = new Fornecedor();
    $listafornecedor = $dalFornecedor->Select();
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
    <title>Fornecedores</title>
</head>
<body>
    <h1>Lista de Fornecedores</h1>
    <table class = "striped responsive-table">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>CNPJ</th>

        </tr>
        <?php foreach ($listafornecedor as $fornecedor) { ?>
            <tr>
                <td><?php echo $fornecedor->getIdfornecedor(); ?></td>
                <td><?php echo $fornecedor->getDescricao(); ?></td>
                <td><?php echo $fornecedor->getCnpj(); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>