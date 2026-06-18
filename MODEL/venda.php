<?php
    namespace MODEL;
    class Venda {
        private ?int $idvenda;
        private ?int $idcliente;
        private ?int $idfuncionario;
        private ?float $total;
        private ?string $datavenda;
/////        

        public function __construct() {
           
        }
/////
        public function getIdvenda(){
            return $this->idvenda;
        }
        public function setIdvenda(int $idvenda){
            $this->idvenda = $idvenda;
        }
/////

        public function getIdcliente(){
            return $this->idcliente;
        }
        public function setIdcliente(int $idcliente){
            $this->idcliente = $idcliente;
        }
/////


        public function getIdfuncionario(){
            return $this->idfuncionario;
        }
        public function setIdfuncionario(int $idfuncionario){
            $this->idfuncionario = $idfuncionario;
        }
/////


        public function getTotal(){
            return $this->total;
        }
        public function setTotal(float $total){
            $this->total = $total;
        }
/////


        public function getDatavenda(){
            return $this->datavenda;
        }
        public function setDatavenda(string $datavenda){
            $this->datavenda = $datavenda;
        }

    }   
?>