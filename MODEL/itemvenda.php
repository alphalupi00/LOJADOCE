<?php
    namespace MODEL;
    class Itemvenda {
        private ?int $iditemvenda;
        private ?int $idvenda;
        private ?int $idproduto;
        private ?int $quantidade;
        private ?float $preco_unitario;
/////        

        public function __construct() {
           
        }
/////
        public function getIditemvenda(){
            return $this->iditemvenda;
        }
        public function setIditemvenda(int $iditemvenda){
            $this->iditemvenda = $iditemvenda;
        }
/////

        public function getIdvenda(){
            return $this->idvenda;
        }
        public function setIdvenda(int $idvenda){
            $this->idvenda = $idvenda;
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