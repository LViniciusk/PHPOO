<?php
    require_once 'Animal.php';
    class Ave extends Animal{
        //atributos
        private $corPena;

        //construct, getters & setters

        public function getCorPena()
        {
                return $this->corPena;
        }

        public function setCorPena($corPena)
        {
                $this->corPena = $corPena;
        }
        
        //metodos

        public function fazerNinho(){
                print("<p>Construiu um ninho</p>");
        }

        public function locomover(){
                print("<p>Voando</p>");
        }

        public function alimentar(){
                print("<p>Comendo frutas</p>");
        }

        public function emitirSom(){
                print("<p>Som de ave</p>");
        }
    }