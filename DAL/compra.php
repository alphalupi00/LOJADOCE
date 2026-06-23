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

        public function SelectById(int $idcompra){
            $sql = "Select * from compra where idcompra=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($idcompra));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $compra = new \MODEL\compra();
            if ($linha) {
                $compra->setIdcompra($linha['idcompra']);
                $compra->setIdfornecedor($linha['idfornecedor']);
                $compra->setIdfuncionario($linha['idfuncionario']);
                $compra->setDatacompra($linha['datacompra']);
                $compra->setTotal($linha['total']);
            }

            return $compra;
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

        public function Update(\MODEL\Compra $compra)
        {
            $sql = "UPDATE compra SET idfornecedor = ?, idfuncionario = ?, datacompra = ?, total = ? WHERE idcompra = ?;"; 
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($compra->getIdfornecedor(), $compra->getIdfuncionario(), $compra->getDatacompra(), $compra->getTotal(), $compra->getIdcompra()));
            $con = Conexao::desconectar();
            
            return $result;
        }

        public function Delete(int $idcompra)
        {
            $sql = "Delete from compra WHERE idcompra = ?;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql); 
            $result = $query->execute(array($idcompra));
            $con = Conexao::desconectar();
            
            return $result;
        }
    }
?>