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
    }
?>