<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/cliente.php";

    class Cliente{
        public function Select(){
            $sql = "Select * from cliente;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            $listacliente = [];

            foreach ($registros as $linha){
                $cliente = new \MODEL\Cliente();
                $cliente->setIdcliente($linha['idcliente']);
                $cliente->setNome($linha['nome']);
                $cliente->setCpf($linha['cpf']);
                $cliente->setNumero($linha['numero']);

                $listacliente[]= $cliente;
            }

            return $listacliente;
        }
    }
?>