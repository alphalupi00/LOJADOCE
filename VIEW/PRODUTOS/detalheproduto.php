<?php
    $idproduto = $_GET['idproduto'] ;
    //echo $idproduto;

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/produto.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/produto.php";
    

    use DAL\Produto;

    $dalProduto = new DAL\Produto();
    $produto = $dalProduto->SelectById($idproduto);

?>

<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
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
    <title>Detalhe produtos</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Detalhe Produtos</h3>
        </div>

        <div class = "row brown lighten-1">
            
            <form action="operacaodetalheproduto.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <label for="idproduto" class="black-text bold">ID do produto: <?php echo $produto->getIdProduto() ?>
                    </label>
                    </br> 
                    
                </div>

                <div class="input-field col s8">
                    <label for="nomelabel" class="black-text bold">Nome do produto: <?php echo $produto->getDescricao() ?></label>
                </div>

                <div class="input-field col s8">                    
                    <label for="precolabel" class="black-text bold">Preço: <?php echo $produto->getPreco() ?></label>
                </div>

                 <div class="input-field col s8">
                    <label for="quantidadelabel" class="black-text bold">Quantidade em estoque: <?php echo $produto->getQtdestoque() ?></label>
                </div>

                 <div class="input-field col s8">
                    <label for="quantidadelabel" class="black-text bold">Quantidade minima: <?php echo $produto->getQtdminima() ?></label>
                </div>

                <div class="input-field col s8">
                    <label for="quantidadelabel" class="black-text bold">Quantidade maxima: <?php echo $produto->getQtdmaxima() ?></label>
                </div>             

                <!-- botao enviar -->
                <div class="row">
                    
                    <div class="col s12 m10 center-align" style="margin-top: 15px;">
                       
                        <a class="waves-effect waves-light Purple btn"
                        onclick="JavaScript:location.href='listaproduto.php'">
                            <i class="material-icons right">arrow_back</i>voltar
                        </a>
                        
                        <a class="waves-effect waves-light orange btn"
                             onclick="JavaScript:location.href='editarproduto.php?idproduto='+'<?php echo $produto->getIdProduto(); ?>'">Editar
                            <i class="material-icons right">edit</i>
                        </a>
                        
                        <a class="waves-effect waves-light red btn"
                             onclick="JavaScript: remover(<?php echo $produto->getIdProduto(); ?>)">Remover
                            <i class="material-icons right">delete</i>
                        </a>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</body>
</html>

<script>
    function remover(idproduto) {
        if (confirm('Excluir Prouto' + idproduto + '?')){
            location.href = 'removerproduto.php?idproduto=' + idproduto;
        }
    }
</script>
