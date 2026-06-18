<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/compra.php";

    class Compra{
        public function Select(){
            $sql = "Select * from compra;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            $listacompra = [];

            foreach ($registros as $linha){
                $compra = new \MODEL\compra();

                $compra->setIdcompra($linha['idcompra']);
                $compra->setIdfornecedor($linha['idfornecedor']);
                $compra->setIdfuncionario($linha['idfuncionario']);
                $compra->setDatacompra($linha['datacompra']);
                $compra->setTotal($linha['total']);


                $listacompra[]= $compra;
            }

            return $listacompra;
        }

        public function Insert(\MODEL\Compra $compra)
        {
            $sql = "INSERT INTO compra (idfornecedor, idfuncionario, datacompra, total) 
            VALUES ('{$compra->getIdfornecedor()}', '{$compra->getIdfuncionario()}', '{$compra->getDatacompra()}', '{$compra->getTotal()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;

        }
}

?>