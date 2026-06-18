<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    //de alguma forma essa pagina tem que ser puxada depois de cadastras uma compra, 
    // para que o id da compra seja preenchido automaticamente, ou seja, 
    // o cliente nao pode escolher o id da compra, tem que ser puxado automaticamente
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
    <title>Inserir Itens de Compra</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Inserir Itens de Compra</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoinseriritemcompra.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="Informe o id da compra" id="idcompra" name="idcompra" type="number" class="validate">
                    <label for="idcompralabel">Id da compra: </label>
                </div>

                    <!--fazer pesquisa para a pessoa procurar o produto escrevendo o nome e poder selecionar-->
                <div class="input-field col s8">
                    <input placeholder="Informe o produto" id="idproduto" name="idproduto" type="text" class="validate">
                    <label for="idprodutolabel">Produto: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a quantidade" id="quantidade" name="quantidade" type="number" class="validate">
                    <label for="quantidadelabel">Quantidade: </label>
                </div>

                <!--puxar automaticamente o preço unitario do produto-->
                    <div class="input-field col s8">
                        <input placeholder="Preço unitário" id="preco_unitario" name="preco_unitario" type="text" class="validate">
                        <label for="preco_unitariolabel"></label>

                 <!-- botao enviar -->
                <div class="row center col s8">
                    <button class="btn waves-effect waves-light" type="submit" name="action" >
                    Salvar
                    </button>
                  
                    

                </div>

            </form>    
        </div>
    </div>
</body>
</html>