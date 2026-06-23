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
    <title>Editar produtos</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Editar Produtos</h3>
        </div>

        <div class = "row brown lighten-1">
            
            <form action="operacaoeditarproduto.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <label for="idproduto" class="black-text bold">ID do produto: <?php echo $produto->getIdProduto() ?>
                    </label>
                    </br> </br>
                    <input type="hidden" name="idproduto" value=<?php echo $idproduto; ?>>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do produto" id="descricao" name="descricao" type="text" class="validate"
                    value="<?php echo $produto->getDescricao(); ?>">
                    <label for="nomelabel">Nome do produto: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o preço do produto" id="preco" name="preco" step="0.01" type="number" class="validate"
                    value="<?php echo $produto->getPreco(); ?>">
                    <label for="precolabel">Preço: </label>
                </div>

                 <div class="input-field col s8">
                    <input placeholder="Informe a quantidade em estoque" id="qtdestoque" name="qtdestoque" type="number" step="0.01" class="validate"
                    value="<?php echo $produto->getQtdestoque(); ?>">
                    <label for="quantidadelabel">Quantidade em estoque: </label>
                </div>

                 <div class="input-field col s8">
                    <input placeholder="Informe a quantidade minima" id="qtdminima" name="qtdminima" type="number" step="0.01" class="validate"
                    value="<?php echo $produto->getQtdminima(); ?>">
                    <label for="quantidadelabel">Quantidade minima: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a quantidade maxima" id="qtdmaxima" name="qtdmaxima" type="number" step="0.01" class="validate"
                    value="<?php echo $produto->getQtdmaxima(); ?>">
                    <label for="quantidadelabel">Quantidade maxima: </label>
                </div>

                <!-- botao enviar -->
                <div class="row">
<<<<<<< HEAD
                    <div class="col s12 m10 center-align" style="margin-top: 15px;">                 
                        <a class="waves-effect waves-light Purple btn"
                        onclick="JavaScript:location.href='listaproduto.php'">
                            <i class="material-icons right">arrow_back</i>voltar
                        </a>                    
                        <button class="btn waves-effect waves-light green" type="submit" name="action">
                            Salvar
                             <i class="material-icons right">send</i>
                        </button>        
=======
                    <div class="col s12 m10 center-align" style="margin-top: 15px;">
                        <button class="btn waves-effect waves-light green" type="submit" name="action">
                            Salvar
                        </button>
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
                    </div>
                </div>
            </form>    
        </div>
    </div>
</body>
</html>