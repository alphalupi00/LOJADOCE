<?php
    namespace MODEL;
    class Funcionario {
        private ?int $idfuncionario;
        private ?string $nome;
        private ?string $numero;
        private ?string $email;
        private ?string $senha;
/////        

        public function __construct() {
           
        }
/////
        public function getIdfuncionario(){
            return $this->idfuncionario;
        }
        public function setIdfuncionario(int $idfuncionario){
            $this->idfuncionario = $idfuncionario;
        }
/////

        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }
/////


        public function getNumero(){
            return $this->numero;
        }
        public function setNumero(string $numero){
            $this->numero = $numero;
        }
/////


        public function getEmail(){
            return $this->email;
        }
        public function setEmail(string $email){
            $this->email = $email;
        }
/////


        public function getSenha(){
            return $this->senha;
        }
        public function setSenha(string $senha){
            $this->senha = $senha;
        }

    }   
?>