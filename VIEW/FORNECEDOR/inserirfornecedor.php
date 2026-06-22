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
            <h3 class= "center">Inserir Fornecedores</h3>
        </div>

        <div class = "row brown lighten-1">
            <form id="formFornecedor" action="operacaoinserirfornecedor.php" method="post" class="col s10" novalidate>

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do fornecedor" id="descricao" name="descricao" type="text" class="validate" required minlength="2" maxlength="40">
                    <label for="descricaolabel">Nome do fornecedor: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o CNPJ do fornecedor" id="cnpj" name="cnpj" type="text" class="validate" required minlength="14">
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
    <script src="/LOJADOCE/VIEW/JS/validacaofornecedor.js"></script>
</body>
</html>