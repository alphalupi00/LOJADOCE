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
    <title>Inserir produtos</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Inserir Fornecedores</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoinserirfornecedor.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do fornecedor" id="descricao" name="descricao" type="text" class="validate">
                    <label for="descricaolabel">Nome do fornecedor: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o CNPJ do fornecedor" id="cnpj" name="cnpj" type="text" class="validate">
                    <label for="cnpjlabel">CNPJ: </label>
                </div>

                <!-- botao salvar -->
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