<?php

    $idcliente = $_GET['idcliente'] ;
    //echo $idclinte;


    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/cliente.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/cliente.php";

    use DAL\Cliente;

    $dalCliente = new DAL\Cliente();
    $cliente = $dalCliente->SelectById($idcliente);
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
    <title>Editar cliente</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Editar cliente</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoinserircliente.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="Informe o nome do cliente" id="nome" name="nome" type="text" class="validate"
                    value="<?php echo $cliente->getNome(); ?>">
                    <label for="nomelabel">Nome do cliente: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o CPF do cliente" id="cpf" name="cpf" type="text" class="validate"
                    value="<?php echo $cliente->getCpf(); ?>">
                    <label for="cpflabel">CPF: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe numero/telefone" id="numero" name="numero" type="text" class="validate"
                    value="<?php echo $cliente->getNumero(); ?>">
                    <label for="numerolabel">Número/Telefone: </label>
                </div>

                <!-- botao salvar -->
                <div class="row center col s8">
                    <a class="waves-effect waves-light Purple btn"
                        onclick="JavaScript:location.href='listacliente.php'">
                            <i class="material-icons right">arrow_back</i>voltar
                    </a> 
                    <button class="btn waves-effect waves-light" type="submit" name="action" >
                    Salvar
                        <i class="material-icons right">send</i>
                    </button>               
                </div>
              </div>
            </form>    
        </div>
    </div>
</body>
</html>