<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa{
        //atributos
        private $especialidade;
        private $salario;

        //construct, getters & setters
        
        public function getEspecialidade()
        {
                return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
                $this->especialidade = $especialidade;
        }

        public function getSalario()
        {
                return $this->salario;
        }

        public function setSalario($salario)
        {
                $this->salario = $salario;
        }

        //metodos
        public function receberAum($a){
                $this->setSalario($this->getSalario() + $a);
        }
    }