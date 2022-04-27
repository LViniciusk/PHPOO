<?php
    class Pessoa{
        //atributos
        private $nome;
        private $idade;
        private $sexo;

        //construct, getters & setters
        
        public function __construct($n, $i, $s){
                $this->nome = $n;
                $this->idade = $i;
                $this->sexo = $s;
        }

        public function getSexo()
        {
                return $this->sexo;
        }

        public function setSexo($sexo)
        {
                $this->sexo = $sexo;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
        }

        //metodos

        public function fazerAniver(){

        }
    }