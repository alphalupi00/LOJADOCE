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
    <title>Inserir cliente</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Inserir cliente</h3>
        </div>

        <div class = "row brown lighten-1">
<<<<<<< HEAD
            <form action="operacaoinserircliente.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do cliente" id="nome" name="nome" type="text" class="validate">
=======
            <form id="formCliente" action="operacaoinserircliente.php" method="post" class="col s10" novalidate>

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do cliente" id="nome" name="nome" type="text" class="validate" required minlength="2" maxlength="40">
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
                    <label for="nomelabel">Nome do cliente: </label>
                </div>

                <div class="input-field col s8">
<<<<<<< HEAD
                    <input placeholder="Informe o CPF do cliente" id="cpf" name="cpf" type="text" class="validate">
=======
                    <input placeholder="Informe o CPF do cliente" id="cpf" name="cpf" type="text" class="validate" required minlength="11" maxlength="14">
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
                    <label for="cpflabel">CPF: </label>
                </div>

                <div class="input-field col s8">
<<<<<<< HEAD
                    <input placeholder="Informe numero/telefone" id="numero" name="numero" type="text" class="validate">
=======
                    <input placeholder="Informe numero/telefone" id="numero" name="numero" type="text" class="validate" required minlength="10" maxlength="15">
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
                    <label for="numerolabel">Número/Telefone: </label>
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
<<<<<<< HEAD
=======
    <script src="/LOJADOCE/VIEW/JS/validacaocliente.js"></script>
>>>>>>> c3fd0ba8e7c3018ef2cef8982bfe4d2672721959
</body>
</html>