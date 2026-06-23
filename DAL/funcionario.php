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

        public function SelectById(int $idfuncionario){
            $sql = "Select * from funcionario where idfuncionario=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($idfuncionario));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $funcionario = new \MODEL\funcionario();
            if ($linha) {
                $funcionario->setIdfuncionario($linha['idfuncionario']);
                $funcionario->setNome($linha['nome']);
                $funcionario->setNumero($linha['numero']);
                $funcionario->setEmail($linha['email']);
                $funcionario->setSenha($linha['senha']);
            }

            return $funcionario;
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

        public function Update(\MODEL\Funcionario $funcionario)
        {
            $sql = "UPDATE funcionario SET nome = ?, numero = ?, email = ?, senha = ? WHERE idfuncionario = ?;"; 
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($funcionario->getNome(), $funcionario->getNumero(), $funcionario->getEmail(), $funcionario->getSenha(), $funcionario->getIdfuncionario()));
            $con = Conexao::desconectar();
            
            return $result;
        }

        public function Delete(int $idfuncionario)
        {
            $sql = "Delete from funcionario WHERE idfuncionario = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($idfuncionario));
            $con = Conexao::desconectar();
            
            return $result;
        }
    }
?>