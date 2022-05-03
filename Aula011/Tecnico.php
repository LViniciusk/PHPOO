<?php

    class Tecnico extends Aluno{
        //atributos
        private $registroPro;

        //construct, getters & setters

        public function getRegistroPro()
        {
                return $this->registroPro;
        }

        public function setRegistroPro($registroPro)
        {
                $this->registroPro = $registroPro;
        }

        //metodos

        public function praticar(){
            
        }
    }