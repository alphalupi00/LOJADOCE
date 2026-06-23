<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/fornecedor.php";

    class Fornecedor{
        public function Select(){
            $sql = "Select * from fornecedor;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            $listafornecedor = [];

            foreach ($registros as $linha){
                $fornecedor = new \MODEL\fornecedor();
                $fornecedor->setIdfornecedor($linha['idfornecedor']);
                $fornecedor->setDescricao($linha['descricao']);
                $fornecedor->setCnpj($linha['cnpj']);

                $listafornecedor[]= $fornecedor;
            }

            return $listafornecedor;
        }

        public function SelectById(int $idfornecedor){
            $sql = "Select * from fornecedor where idfornecedor=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($idfornecedor));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $fornecedor = new \MODEL\fornecedor();
            if ($linha) {
                $fornecedor->setIdfornecedor($linha['idfornecedor']);
                $fornecedor->setDescricao($linha['descricao']);
                $fornecedor->setCnpj($linha['cnpj']);
            }

            return $fornecedor;
        }

        public function Insert(\MODEL\Fornecedor $fornecedor)
        {
            $sql = "INSERT INTO fornecedor (descricao, cnpj) 
            VALUES ('{$fornecedor->getDescricao()}', '{$fornecedor->getCnpj()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;
        }

        public function Update(\MODEL\Fornecedor $fornecedor)
        {
            $sql = "UPDATE fornecedor SET descricao = ?, cnpj = ? WHERE idfornecedor = ?;"; 
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($fornecedor->getDescricao(), $fornecedor->getCnpj(), $fornecedor->getIdfornecedor()));
            $con = Conexao::desconectar();
            
            return $result;
        }

        public function Delete(int $idfornecedor)
        {
            $sql = "Delete from fornecedor WHERE idfornecedor = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($idfornecedor));
            $con = Conexao::desconectar();
            
            return $result;
        }
    }
?>