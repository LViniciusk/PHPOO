<?php
    require_once 'Animal.php';
    class mamifero extends Animais{
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
        public function emitirSom(){
                print("<p>Som de mamifero</p>");
        }
    }