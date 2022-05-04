<?php
    require_once 'abstract/Animal.php';
    class Peixe extends Animal{
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

        public function soltarBolha(){
                print("Soltou bolha");
        }

        public function locomover(){
                print("<p>Nadando</p>");
        }

        public function alimentar(){
                print("<p>Comendo substancias</p>");
        }

        public function emitirSom(){
                print("<p>Peixe não faz som</p>");
        }
    }