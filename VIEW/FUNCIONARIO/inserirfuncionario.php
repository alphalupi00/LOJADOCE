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
            <h3 class= "center">Inserir Funcionários</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoinserirfuncionario.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do funcionário" id="nome" name="nome" type="text" class="validate">
                    <label for="nomelabel">Nome do funcionário: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o numero/telefone do funcionário" id="numero" name="numero" type="text" class="validate">
                    <label for="numerolabel">Numero/Telefone: </label>
                </div>

                 <div class="input-field col s8">
                    <input placeholder="Informe o email do funcionário" id="email" name="email" type="email" class="validate">
                    <label for="Emaillabel">Email: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a senha do funcionário" id="senha" name="senha" type="password" class="validate">
                    <label for="senhalabel">Senha: </label>
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