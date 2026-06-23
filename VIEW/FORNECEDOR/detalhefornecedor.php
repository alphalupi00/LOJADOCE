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
    <title>Detalhes fornecedor</title>
</head>
<body class = "#a1887f  brown lighten-4">
    <div class = "container orange lighten-2 col s12 " >
        <div>
            <h3 class= "center">Detalhe fornecedor</h3>
        </div>

        <div class = "row brown lighten-1">
            <form action="operacaoinserirfornecedor.php" method="post" class="col s10">

                <div class="input-field col s8">
                    <label for="descricaolabel">Descrição: <?php echo $fornecedor->getDescricao() ?></label>
                </div>

                <div class="input-field col s8">
                    <label for="cnpjlabel">CNPJ: <?php echo $fornecedor->getCnpj() ?></label>
                </div>

                <div class="row center col s8">
                    </div>  </div> 
                    <a class="waves-effect waves-light Purple btn"
                        
                        onclick="JavaScript:location.href='listafornecedor.php'">
                            <i class="material-icons right">arrow_back</i>voltar
                        </a>
                        
                        <a class="waves-effect waves-light orange btn"
                             onclick="JavaScript:location.href='editarfornecedor.php?idfornecedor='+'<?php echo $fornecedor->getIdfornecedor(); ?>'">Editar
                            <i class="material-icons right">edit</i>
                        </a>
                        
                        <a class="waves-effect waves-light red btn"
                             onclick="JavaScript: remover(<?php echo $fornecedor->getIdfornecedor(); ?>)">Remover
                            <i class="material-icons right">delete</i>
                        </a> 
                        </div>
                    </div>            

                        </div>            
                </div>
              </div>
              
            </form>    
        </div>
    </div>
</body>
</html>