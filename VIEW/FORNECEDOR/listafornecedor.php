<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/fornecedor.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/fornecedor.php";


    use DAL\fornecedor;

    $dalFornecedor = new Fornecedor();
    $listafornecedor = $dalFornecedor->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body class="#a1887f  brown lighten-4">
    <h1>Lista de Fornecedores</h1>

    <table class = "striped responsive-table hover: orange lighten-2">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>CNPJ</th>
            <th>Cadastrar Fornecedor    
                            <a class="btn-floating btn-small waves-effect waves-light green">
                <i class="material-icons"
                    onclick="javaScript:location.href='inserirfornecedor.php'">+</i>
                </a>
            </th>

        </tr>
        <?php foreach ($listafornecedor as $fornecedor) { ?>
            <tr>
                <td><?php echo $fornecedor->getIdfornecedor(); ?></td>
                <td><?php echo $fornecedor->getDescricao(); ?></td>
                <td><?php echo $fornecedor->getCnpj(); ?></td>
                <td>
                    <a class="btn-floating btn-smal waves-effect pink">
                        <i class="material-icons"
                        onclick="JavaScript:location.href='editarfornecedor.php?idfornecedor='+'<?php echo $fornecedor->getIdfornecedor(); ?>'">edit
                        </i>
                    </a>

                    <a class="btn-floating btn-smal waves-effect blue">
                        <i class="material-icons"
                        onclick="JavaScript:location.href='detalhefornecedor.php?idfornecedor='+'<?php echo $fornecedor->getIdfornecedor(); ?>'">details
                        </i>
                    </a>

                    <a class="btn-floating btn-smal waves-effect red">
                        <i class="material-icons"
                        onclick="JavaScript: remover(<?php echo $fornecedor->getIdfornecedor(); ?>)">delete</i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<script>
    function remover(idfornecedor) {
        if (confirm('Excluir Fornecedor ' + idfornecedor + '?')){
            location.href = 'removerfornecedor.php?idfornecedor=' + idfornecedor;
        }
    }
</script>