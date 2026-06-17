<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/funcionario.php";

    class Funcionario{
        public function Select(){
            $sql = "Select * from funcionario;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            $listafuncionario = [];

            foreach ($registros as $linha){
                $funcionario = new \MODEL\funcionario();
                $funcionario->setIdfuncionario($linha['idfuncionario']);
                $funcionario->setNome($linha['nome']);
                $funcionario->setNumero($linha['numero']);
                $funcionario->setEmail($linha['email']);
                $funcionario->setSenha($linha['senha']);

                $listafuncionario[]= $funcionario;
            }

            return $listafuncionario;
        }
        
        public function Insert(\MODEL\Funcionario $funcionario)
        {
            $sql = "INSERT INTO funcionario (nome, numero, email, senha) 
            VALUES ('{$funcionario->getNome()}', '{$funcionario->getNumero()}', '{$funcionario->getEmail()}', '{$funcionario->getSenha()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;

        }
    }
?>