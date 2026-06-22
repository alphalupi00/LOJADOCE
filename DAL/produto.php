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

        public function SelectById(int $idproduto){
            $sql = "Select * from produto where idproduto=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($idproduto));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();
            $listaproduto = [];
                $produto = new \MODEL\produto();
                $produto->setIdProduto($linha['idproduto']);
                $produto->setDescricao($linha['descricao']);
                $produto->setPreco($linha['preco']);
                $produto->setQtdestoque($linha['qtdestoque']);
                $produto->setQtdminima($linha['qtdminima']);
                $produto->setQtdmaxima($linha['qtdmaxima']);

            return $produto;
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

        public function Update(\MODEL\Produto $produto)
        {
            $sql = "UPDATE produto SET descricao = ?, preco = ?, qtdestoque = ?, qtdminima = ?, qtdmaxima = ? WHERE idproduto = ?;"; 
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($produto->getDescricao(), $produto->getPreco(), $produto->getQtdestoque(), $produto->getQtdminima(), $produto->getQtdmaxima(), $produto->getIdProduto()));
            $con = Conexao::desconectar();
            
            return $result;

        }
    }
?>