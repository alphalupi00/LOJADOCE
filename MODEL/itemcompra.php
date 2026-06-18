<?php
    namespace MODEL;
    class Itemcompra {
        private ?int $iditemcompra;
        private ?int $idcompra;
        private ?int $idproduto;
        private ?int $quantidade;
        private ?float $preco_unitario;
/////        

        public function __construct() {
           
        }
/////
        public function getIditemcompra(){
            return $this->iditemcompra;
        }
        public function setIditemcompra(int $iditemcompra){
            $this->iditemcompra = $iditemcompra;
        }
/////

        public function getIdcompra(){
            return $this->idcompra;
        }
        public function setIdcompra(int $idcompra){
            $this->idcompra = $idcompra;
        }
/////

        public function getIdproduto(){
            return $this->idproduto;
        }
        public function setIdproduto(int $idproduto){
            $this->idproduto = $idproduto;
        }
/////

        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setQuantidade(int $quantidade){
            $this->quantidade = $quantidade;
        }
/////

        public function getPreco_unitario(){
            return $this->preco_unitario;
        }
        public function setPreco_unitario(float $preco_unitario){
            $this->preco_unitario = $preco_unitario;
        }

    } 
?>