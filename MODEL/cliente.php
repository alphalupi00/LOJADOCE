<?php
    namespace MODEL;
    class Cliente {
        private ?int $idcliente;
        private ?string $nome;
        private ?string $cpf;
        private ?int $numero;

        public function __construct() {
        }
/////

        public function getIdcliente(){
            return $this->idcliente;
        }
        public function setIdcliente(int $idcliente){
            $this->idcliente = $idcliente;
        }

/////

        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }
/////

        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf(string $cpf){
            $this->cpf = $cpf;
        }
/////
        public function getNumero(){
            return $this->numero;
        }
        public function setNumero(int $numero){
            $this->numero = $numero;
        }

    }   
?>