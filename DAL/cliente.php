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

        public function SelectById(int $idcliente){
            $sql = "Select * from cliente where idcliente=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($idcliente));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $cliente = new \MODEL\Cliente();
            if ($linha) {
                $cliente->setIdcliente($linha['idcliente']);
                $cliente->setNome($linha['nome']);
                $cliente->setCpf($linha['cpf']);
                $cliente->setNumero($linha['numero']);
            }

            return $cliente;
        }

        public function Insert(\MODEL\Cliente $cliente)
        {
            $sql = "INSERT INTO cliente (nome, cpf, numero) 
            VALUES ('{$cliente->getNome()}', '{$cliente->getCpf()}', '{$cliente->getNumero()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;
        }

        public function Update(\MODEL\Cliente $cliente)
        {
            $sql = "UPDATE cliente SET nome = ?, cpf = ?, numero = ? WHERE idcliente = ?;"; 
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($cliente->getNome(), $cliente->getCpf(), $cliente->getNumero(), $cliente->getIdcliente()));
            $con = Conexao::desconectar();
            
            return $result;
        }

        public function Delete(int $idcliente)
        {
            $sql = "Delete from cliente WHERE idcliente = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($idcliente));
            $con = Conexao::desconectar();
            
            return $result;
        }
    }
?>