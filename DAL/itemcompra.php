<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/itemcompra.php";

    class Itemcompra{
        public function Select(){
            $sql = "Select * from itemcompra;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            $listaitemcompra = [];

            foreach ($registros as $linha){
                $itemcompra = new \MODEL\Itemcompra();
                $itemcompra->setIditemcompra($linha['iditemcompra']);
                $itemcompra->setIdcompra($linha['idcompra']);
                $itemcompra->setIdproduto($linha['idproduto']);
                $itemcompra->setQuantidade($linha['quantidade']);
                $itemcompra->setPreco_unitario($linha['preco_unitario']);

                $listaitemcompra[]= $itemcompra;
            }

            return $listaitemcompra;
        }
        
        public function Insert(\MODEL\Itemcompra $itemcompra)
        {
            $sql = "INSERT INTO itemcompra (idcompra, idproduto, quantidade, preco_unitario) 
            VALUES ('{$itemcompra->getIdcompra()}', '{$itemcompra->getIdproduto()}', '{$itemcompra->getQuantidade()}', '{$itemcompra->getPreco_unitario()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;

        }
    }
?>