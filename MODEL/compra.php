<?php
    namespace MODEL;
    class Compra {
        private ?int $idcompra;
        private ?int $idfornecedor;
        private ?int $idfuncionario;
        private ?string $datacompra;
        private ?float $total;

        public function __construct() {
        }
/////

        public function getIdcompra(){
            return $this->idcompra;
        }
        public function setIdcompra(int $idcompra){
            $this->idcompra = $idcompra;
        }

/////

        public function getIdfornecedor(){
            return $this->idfornecedor;
        }
        public function setIdfornecedor(int $idfornecedor){
            $this->idfornecedor = $idfornecedor;
        }

/////

        public function getIdfuncionario(){
            return $this->idfuncionario;
        }
        public function setIdfuncionario(int $idfuncionario){
            $this->idfuncionario = $idfuncionario;
        }

/////

        public function getDatacompra(){
            return $this->datacompra;
        }
        public function setDatacompra(string $datacompra){
            $this->datacompra = $datacompra;
        }

/////

        public function getTotal(){
            return $this->total;
        }
        public function setTotal(float $total){
            $this->total = $total;
        }

    }   
?>