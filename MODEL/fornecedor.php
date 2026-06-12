<?php
    namespace MODEL;
    class Fornecedor {
        private ?int $idfornecedor;
        private ?string $descricao;
        private ?string $cnpj;

        public function __construct() {
        }
/////

        public function getIdfornecedor(){
            return $this->idfornecedor;
        }
        public function setIdfornecedor(int $idfornecedor){
            $this->idfornecedor = $idfornecedor;
        }

/////

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }
/////

        public function getCnpj(){
            return $this->cnpj;
        }
        public function setCnpj(string $cnpj){
            $this->cnpj = $cnpj;
        }

    }   
?>