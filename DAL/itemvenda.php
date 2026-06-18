<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/itemvenda.php";

    class Itemvenda{
        public function Select(){
            $sql = "Select * from itemvenda;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            $listaitemvenda = [];

            foreach ($registros as $linha){
                $itemvenda = new \MODEL\Itemvenda();
                $itemvenda->setIditemvenda($linha['iditemvenda']);
                $itemvenda->setIdvenda($linha['idvenda']);
                $itemvenda->setIdproduto($linha['idproduto']);
                $itemvenda->setQuantidade($linha['quantidade']);
                $itemvenda->setPreco_unitario($linha['preco_unitario']);

                $listaitemvenda[]= $itemvenda;
            }

            return $listaitemvenda;
        }
        
        public function Insert(\MODEL\Itemvenda $itemvenda)
        {
            $sql = "INSERT INTO itemvenda (idvenda, idproduto, quantidade, preco_unitario) 
            VALUES ('{$itemvenda->getIdvenda()}', '{$itemvenda->getIdproduto()}', '{$itemvenda->getQuantidade()}', '{$itemvenda->getPreco_unitario()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;

        }
    }
?>