<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    $sql = "Select * from fornecedor;";
    $con = DAL\Conexao::conectar();
    $registros = $con->query($sql);
    $con = DAL\Conexao::desconectar();

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
    <table class = "striped">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>CNPJ</th>

        </tr>
        <?php foreach ($registros as $fornecedor) { ?>
            <tr>
                <td><?php echo $fornecedor['idfornecedor']; ?></td>
                <td><?php echo $fornecedor['descricao']; ?></td>
                <td><?php echo $fornecedor['cnpj']; ?></td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>