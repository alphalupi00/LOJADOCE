<!DOCTYPE html>
<html lang="pt-br">
<head>

     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir cliente</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Inserir cliente</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoinserircliente.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do cliente" id="nome" name="nome" type="text" class="validate">
                    <label for="nomelabel">Nome do cliente: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o CPF do cliente" id="cpf" name="cpf" type="text" class="validate">
                    <label for="cpflabel">CPF: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe numero/telefone" id="numero" name="numero" type="text" class="validate">
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
</body>
</html>