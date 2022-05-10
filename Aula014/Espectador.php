<?php
    require_once 'Pessoa.php';
    class Espectador extends Pessoa{
        //atributos
        private $login;
        private $totAssistido;

        //construct, getters & setters
        public function __construct($no, $id, $se, $log){
                parent::__construct($no, $id, $se);
                $this->setLogin($log);
                $this->totAssistido = 0;
        }

        public function getLogin()
        {
                return $this->login;
        }

        public function setLogin($login)
        {
                $this->login = $login;
        }

        public function getTotAssistido()
        {
                return $this->totAssistido;
        }

        public function setTotAssistido($totAssistido)
        {
                $this->totAssistido = $totAssistido;
        }

        //metodos
        public function Assistiu(){
                 $this->totAssistido ++;
        }


        
    }