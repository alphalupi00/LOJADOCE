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
            <h3 class= "center">Inserir Vendas</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoinserirtvenda.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="Informe o cliente" id="idcliente" name="idcliente" type="text" class="validate">
                    <label for="nomelabel">selecione cliente: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o funcionario" id="idfuncionario" name="idfuncionario" type="text" class="validate">
                    <label for="numerolabel">Selecione o vendedor: </label>
                </div>

                 <div class="input-field col s8">
                    <input placeholder="Informe a data da venda" id="datavenda" name="datavenda" type="date" class="validate">
                    <label for="datavendalabel">Data da venda: </label>
                </div>


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