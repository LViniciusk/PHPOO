<?php
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa{
        //atributos
        private $setor;
        private $trabalhando;

        //construct, getters & setters

        public function getSetor()
        {
                return $this->setor;
        }

        public function setSetor($setor)
        {
                $this->setor = $setor;
        }

        public function getTrabalhando()
        {
                return $this->trabalhando;
        }

        public function setTrabalhando($trabalhando)
        {
                $this->trabalhando = $trabalhando;
        }

        //metodos

        public function mudarTrabalho(){
            $this->setTrabalhando(!($this->getTrabalhando()));
        }
    }