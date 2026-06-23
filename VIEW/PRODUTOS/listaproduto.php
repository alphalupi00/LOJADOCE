<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/produto.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/produto.php";
    

    use DAL\Produto;

    $dalProduto = new DAL\Produto();
    $listaprodutos = $dalProduto->Select();

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
    <title>Produtos</title>
</head>
<body class="#a1887f  brown lighten-4">
    <h1>Lista de Produtos</h1>


    <table class="striped responsive-table hover: orange lighten-2">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade em Estoque</th>
            <th>Quantidade Mínima</th>
            <th>Quantidade Máxima</th>
<<<<<<< HEAD
            <th>Cadastrar produto
                            <!-- botao salvar -->
                <a class="btn-floating btn-small waves-effect waves-light green">
                <i class="material-icons"
                    onclick="javaScript:location.href='inserirproduto.php'">+</i>
                </a>
            </th>
            <th>Operações</th>

            
        </tr>
        <?php foreach ($listaprodutos as $produto) { ?>
            <tr>
                <td><?php echo $produto->getIdProduto(); ?></td>
                <td><?php echo $produto->getDescricao(); ?></td>
                <td><?php echo $produto->getPreco(); ?></td>
                <td><?php echo $produto->getQtdestoque(); ?></td>
                <td><?php echo $produto->getQtdminima(); ?></td>
                <td><?php echo $produto->getQtdmaxima(); ?></td>
                <td></td> 
                <td><a class="btn-floating btn-smal waves-effect pink">
                    <i class="material-icons"
                    onclick="JavaScript:location.href='editarproduto.php?idproduto='+'<?php echo $produto->getIdProduto(); ?>'">edit
                    </i>
                    </a>

                    <a class="btn-floating btn-smal waves-effect blue">
                    <i class="material-icons"
                    onclick="JavaScript:location.href='detalheproduto.php?idproduto='+'<?php echo $produto->getIdProduto(); ?>'">details
                    </i>
                    </a>
                    <a class="btn-floating btn-smal waves-effect red">
                    <i class="material-icons"
                    onclick="JavaScript: remover(<?php echo $produto->getIdProduto(); ?>)">delete</i>
                    </a>
                </td></tr>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<script>
    function remover(idproduto) {
        if (confirm('Excluir Prouto' + idproduto + '?')){
            location.href = 'removerproduto.php?idproduto=' + idproduto;
        }
    }
</script>
=======
            <th>Cadastrar novo poduto                            
                <!-- botao SALVAR -->
                <a class="btn-floating btn-small waves-effect waves- #66bb6a green lighten-1">
                <i class="material-icons"
                    onclick="javaScript:location.href='inserirproduto.php'">+</i>
                </a></th>
        </tr>
            <?php foreach ($listaprodutos as $produto) { ?>
            <tr>
                <td><?php echo $produto->getIdProduto(); ?></td>
                <td><?php echo $produto->getDescricao(); ?></td>
                <td><?php echo 'R$ ' . number_format($produto->getPreco(), 2, ',', '.'); ?></td>
                <td><?php echo $produto->getQtdestoque(); ?></td>
                <td><?php echo $produto->getQtdminima(); ?></td>
                <td><?php echo $produto->getQtdmaxima(); ?></td>

                <!-- botao EDITAR -->
                <td><a class="btn-floating btn-smal waves-effect #ff9100 orange accent-3">
                        <i class="material-icons"
                        onclick="JavaScript:location.href='editarproduto.php?idproduto='+'<?php echo $produto->getIdProduto(); ?>'">edit
                        </i>
                    </a>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
