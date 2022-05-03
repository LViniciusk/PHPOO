<?php
    require_once 'Animal.php';
    class Reptil extends Animal{
        //atributos
        private $corEscama;

        //construct, getters & setters

        public function getCorEscama()
        {
                return $this->corEscama;
        }

        public function setCorEscama($corEscama)
        {
                $this->corEscama = $corEscama;
        }

        //metodos

        public function locomover(){
                print("<p>Rastejando</p>");
        }

        public function alimentar(){
                print("<p>Comendo vegetais</p>");
        }

        public function emitirSom(){
                print("<p>Som de reptil</p>");
        }
    }