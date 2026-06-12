<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/produto.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/produto.php";

    use DAL\Produto;

    $dalProduto = new Produto();
    $listaprodutos = $dalProduto->Select();

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
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table class = "striped">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade em Estoque</th>
            <th>Quantidade Mínima</th>
            <th>Quantidade Máxima</th>
        </tr>
        <?php foreach ($listaprodutos as $produto) { ?>
            <tr>
                <td><?php echo $produto->getIdproduto(); ?></td>
                <td><?php echo $produto->getDescricao(); ?></td>
                <td><?php echo $produto->getPreco(); ?></td>
                <td><?php echo $produto->getQtdestoque(); ?></td>
                <td><?php echo $produto->getQtdminima(); ?></td>
                <td><?php echo $produto->getQtdmaxima(); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>