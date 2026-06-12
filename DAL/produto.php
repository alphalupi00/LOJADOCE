<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/produto.php";

    class Produto{
        public function Select(){
            $sql = "Select * from produto;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            $listaproduto = [];

            foreach ($registros as $linha){
                $produto = new \MODEL\produto();
                $produto->setIdProduto($linha['idproduto']);
                $produto->setDescricao($linha['descricao']);
                $produto->setPreco($linha['preco']);
                $produto->setQtdestoque($linha['qtdestoque']);
                $produto->setQtdminima($linha['qtdminima']);
                $produto->setQtdmaxima($linha['qtdmaxima']);

                $listaproduto[]= $produto;
            }

            return $listaproduto;
        }

        public function Insert(\MODEL\Produto $produto)
        {
            $sql = "INSERT INTO produto (descricao, preco, qtdestoque, qtdminima, qtdmaxima) 
            VALUES ('{$produto->getDescricao()}', '{$produto->getPreco()}', '{$produto->getQtdestoque()}', '{$produto->getQtdminima()}', '{$produto->getQtdmaxima()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;

        }
    }
?>