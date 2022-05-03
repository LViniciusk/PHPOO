<?php
    require_once 'Aluno.php';    
    class Bolsista extends Aluno{
        //atributos
        private $bolsa;

        //construct, getters & setters
        
        public function getBolsa()
        {
                return $this->bolsa;
        }

        public function setBolsa($bolsa)
        {
                $this->bolsa = $bolsa;
        }

        //metodos
        public function renovarBolsa($b){
                $this->setBolsa($b);
        }
        
        public function pagarMensal(){
                print("<br>Pagando mensalidade do bolsista {$this->getNome()}<br>");
        }
    }