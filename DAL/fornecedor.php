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
    }
?>