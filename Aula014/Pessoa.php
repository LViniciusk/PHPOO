<?php

    abstract class Pessoa{
        //atributos
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        //construct, getters & setters
        public function __construct($no, $id, $se){
                $this->setNome($no);
                $this->setIdade($id);
                $this->setSexo($se);
                $this->setExperiencia(0);
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;
        }

        public function getSexo()
        {
                return $this->sexo;
        }

        public function setSexo($sexo)
        {
                $this->sexo = $sexo;
        }

        public function getExperiencia()
        {
                return $this->experiencia;
        }

        public function setExperiencia($experiencia)
        {
                $this->experiencia = $experiencia;
        }

        //metodos
        protected function ganharExp($n){
                $this->setExperiencia($this->getExperiencia() + $n);
        }

        
    }