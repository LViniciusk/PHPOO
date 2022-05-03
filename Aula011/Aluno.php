<?php
    require_once 'Pessoa.php';
    class Aluno extends Pessoa{
        //atributos
        private $matr;
        private $curso;

        //construct, getters & setters
        
        public function getMatr()
        {
                return $this->matr;
        }

        public function setMatr($matr)
        {
                $this->matr = $matr;
        }

        public function getCurso()
        {
                return $this->curso;
        }

        public function setCurso($curso)
        {
                $this->curso = $curso;
        }

        //metodos

        public function pagarMensal(){
                print("Pagando mensalidade do aluno {$this->getNome()}<br>");
        }
    }