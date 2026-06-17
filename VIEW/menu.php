<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- para usar icones na pagina -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--iniciar o meu js pra habilitar o menu de slide-->
    <script src="/LOJADOCE/VIEW/JS/init.js"></script>


    <title>Menu</title>
</head>

<body class="#a1887f  brown lighten-4">
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">cake</i></a>

    <nav>
        <div class="nav-wrapper brown lighten1">
            <a href="https://materializecss.com/icons.html"  class="brand-logo right">
                <img src="/LOJADOCE/IMAGENS/logo.png" height="63" width="180" class="materialboxes">
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/LOJADOCE/VIEW/home.php">Home</a></li>
                <li><a href="/LOJADOCE/VIEW/PRODUTOS/listaproduto.php">Produtos</a></li>
                <li><a href="/LOJADOCE/VIEW/CLIENTE/listacliente.php">Clientes</a></li>
                <li><a href="/LOJADOCE/VIEW/FUNCIONARIO/listafuncionario.php">Funcionários</a></li>
                <li><a href="/LOJADOCE/VIEW/FORNECEDOR/listafornecedor.php">Fornecedores</a></li>
            </ul>


            <!--menu de lado que abre-->
            <ul id="slide-out" class="sidenav #a1887f  brown lighten-4 white-text">
                <li>
                    <div class="user-view brown lighten1 white-text">
                        <div class="background white-text ">
                            <img src="/LOJADOCE/IMAGENS/logo.png" width="180" height="70" class="materialboxed">
                        </div>
                        <a href="https:www.fema.edu.br"><img src="/LOJADOCE/IMAGENS/logo.png" width="250" height="80"></a>
                        <a href="#name"><span class="white-text name">Loja Doce</span></a>
                        <a href="#email"><span class="white-text email">lojadoce@example.com</span></a>
                    </div>
                </li>
                <li><a href="/LOJADOCE/VIEW/home.php" class="white-text">HOME</a></li>
                <li><a href="/LOJADOCE/VIEW/FUNCIONARIO/listafuncionario.php" ><i class="material-icons white-text">people</i>Perfil (Funcionário)</a></li>

                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Contato</a></li>
                <li><a class="waves-effect" href="#!">Instagram</a></li>
                <li><a class="waves-effect" href="#!">Whatsapp</a></li>
            </ul>
                
        </div>
    </nav>
    
</body>
</html>