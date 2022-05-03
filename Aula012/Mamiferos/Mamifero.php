<?php
    require_once 'Animal.php';
    class mamifero extends Animal{
        //atributos
        private $corPelo;

        //construct, getters & setters

        public function getCorPelo()
        {
                return $this->corPelo;
        }

        public function setCorPelo($corPelo)
        {
                $this->corPelo = $corPelo;
        }

        //metodos

        public function locomover(){
                print("<p>Correndo</p>");
        }

        public function alimentar(){
                print("<p>Mamando</p>");
        }

        public function emitirSom(){
                print("<p>Som de mamifero</p>");
        }
    }