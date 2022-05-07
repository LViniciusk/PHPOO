<?php

    abstract class Animais{
        //atributos
        private $peso;
        private $idade;
        private $membros;

        //construct, getters & setters

        public function __construct($p, $i, $m){
                $this->setPeso($p);
                $this->setIdade($i);
                $this->setMembros($m);
        }   

        public function getMembros()
        {
                return $this->membros;
        }

        public function setMembros($membros)
        {
                $this->membros = $membros;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;
        }

        public function getPeso()
        {
                return $this->peso;
        }

        public function setPeso($peso)
        {
                $this->peso = $peso;
        }

        //metodos
        public abstract function emitirSom();
    }