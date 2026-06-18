<?php
    namespace DAL;
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/DAL/conexao.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/LOJADOCE/MODEL/venda.php";

    class Venda{
    public function Select(){
        $sql = "Select * from venda;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        $listavenda = [];

        foreach ($registros as $linha){
            $venda = new \MODEL\venda();

            $venda->setIdvenda($linha['idvenda']);
            $venda->setIdcliente($linha['idcliente']);
            $venda->setIdfuncionario($linha['idfuncionario']);
            $venda->setDatavenda($linha['datavenda']);
            $venda->setTotal($linha['total']);


            $listavenda[]= $venda;
        }

        return $listavenda;
    }

            public function Insert(\MODEL\Venda $venda)
        {
            $sql = "INSERT INTO venda (idcliente, idfuncionario, datavenda, total) 
            VALUES ('{$venda->getIdcliente()}', '{$venda->getIdfuncionario()}', '{$venda->getDatavenda()}', '{$venda->getTotal()}' );";

            $con = Conexao::conectar();
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            echo $result->errorCode();
            
            return $result;

        }
}

?>