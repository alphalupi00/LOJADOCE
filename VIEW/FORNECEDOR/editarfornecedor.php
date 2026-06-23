<?php

    $idfornecedor = $_GET['idfornecedor'] ;
    //echo $idfornecedor;


    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/fornecedor.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/fornecedor.php";

    use DAL\Fornecedor;

    $dalFornecedor = new DAL\Fornecedor();
    $fornecedor = $dalFornecedor->SelectById($idfornecedor);
?>

<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/VIEW/menu.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar fornecedor</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Editar fornecedor</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoeditarfornecedor.php" method="post" class="col s10">

                <input type="hidden" name="idfornecedor" value="<?php echo $fornecedor->getIdfornecedor(); ?>">

                <div class="input-field col s8">
                    <input placeholder="Informe a descrição" id="descricao" name="descricao" type="text" class="validate"
                    value="<?php echo $fornecedor->getDescricao(); ?>">
                    <label for="descricaolabel">Descrição: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o CNPJ" id="cnpj" name="cnpj" type="text" class="validate"
                    value="<?php echo $fornecedor->getCnpj(); ?>">
                    <label for="cnpjlabel">CNPJ: </label>
                </div>

                <div class="row center col s8">
                    <a class="waves-effect waves-light Purple btn"
                        onclick="JavaScript:location.href='listafornecedor.php'">
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