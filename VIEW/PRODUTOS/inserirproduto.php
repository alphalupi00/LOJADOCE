<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <style>
        /*CSS para as mensagens em vermelho ficarem embaixo do campo*/
        label.error {
            color: #d32f2f !important;
            font-size: 0.85rem !important;
            display: block !important;
            margin-top: 5px !important;
            margin-bottom: 10px !important;
            position: relative !important;
        }
    </style>
    <title>Inserir produtos</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Inserir Produtos</h3>
        </div>

        <div class = "row brown lighten-1">
            
            <form id="formProduto" action="operacaoinserirproduto.php" method="post" class="col s10" novalidate>

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do produto" id="descricao" name="descricao" type="text" class="validate" required minlength="2" maxlength="50">
                    <label for="nomelabel">Nome do produto: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o preço do produto" id="preco" name="preco" step="0.01" type="number" class="validate" required min="0.01">
                    <label for="precolabel">Preço R$: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a quantidade em estoque" id="qtdestoque" name="qtdestoque" type="number" step="0.01" class="validate" required min="1">
                    <label for="quantidadelabel">Quantidade em estoque: </label>
                </div>

                 <div class="input-field col s8">
                    <input placeholder="Informe a quantidade minima" id="qtdminima" name="qtdminima" type="number" step="0.01" class="validate" required min="1">
                    <label for="quantidadelabel">Quantidade minima: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a quantidade maxima" id="qtdmaxima" name="qtdmaxima" type="number" step="0.01" class="validate" required min="1">
                    <label for="quantidadelabel">Quantidade maxima: </label>
                </div>

                <!-- botao enviar -->
                <div class="row">
                    <div class="col s12 m10 center-align" style="margin-top: 15px;">
                        <button class="btn waves-effect waves-light green" type="submit" name="action">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>    
        </div>
    </div>
    <script src="/LOJADOCE/VIEW/JS/validacaoproduto.js"></script>
</body>
</html>