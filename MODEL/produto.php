<?php
    namespace MODEL;
    class Produto {
        private ?int $idproduto;
        private ?string $descricao;
        private ?float $preco;
        private ?int $qtdestoque;
        private ?int $qtdminima;
        private ?int $qtdmaxima;

        public function __construct() {
           
        }
        public function getIdProduto(){
            return $this->idproduto;
        }
        public function setIdProduto(int $idproduto){
            $this->idproduto = $idproduto;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao(int $descricao){
            $this->descricao = $descricao;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco(float $preco){
            $this->preco = $preco;
        }

        public function getQtdestoque(){
            return $this->qtdestoque;
        }
        public function setQtdestoque(int $qtdestoque){
            $this->qtdestoque = $qtdestoque;
        }


        public function getQtdminima(){
            return $this->qtdminima;
        }
        public function setQtdminima(int $qtdminima){
            $this->qtdminima = $qtdminima;
        }

        public function getQtdmaxima(){
            return $this->qtdmaxima;
        }
        public function setQtdmaxima(int $qtdmaxima){
            $this->qtdmaxima = $qtdmaxima;
        }

    }   
?>