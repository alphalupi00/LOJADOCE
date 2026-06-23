<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<<<<<<< HEAD
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
=======
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
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
    <title>Inserir produtos</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Inserir Compras</h3>
        </div>

        <div class = "row brown lighten-1">
<<<<<<< HEAD
            <form action="operacaoinserircompra.php" method="post" class="col s10">
=======
            <form id="formCompra" action="operacaoinserircompra.php" method="post" class="col s10">
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959

                <div class="input-field col s8">
                    <input placeholder="Informe o cliente" id="idcliente" name="idcliente" type="text" class="validate">
                    <label for="nomelabel">selecione cliente: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o funcionario" id="idfuncionario" name="idfuncionario" type="text" class="validate">
                    <label for="numerolabel">Selecione o funcionário: </label>
                </div>

                 <div class="input-field col s8">
                    <input placeholder="Informe a data da compra" id="datacompra" name="datacompra" type="date" class="validate">
                    <label for="datacompralabel">Data da compra: </label>
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
<<<<<<< HEAD
=======
        <script src="/LOJADOCE/VIEW/JS/validacaocompra.js"></script>
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
</body>
</html>