<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo{
        //atributos
        private $titulo;
        private $avaliacao;
        private $view;
        private $curtidas;
        private $reproduzindo;

        //construct, getters & setters
        public function __construct($titulo){
            $this->setTitulo($titulo);
            $this->setAvaliacao(0);
            $this->setView(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }


        public function getTitulo()
        {
                return $this->titulo;
        }

        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;
        }

        public function getAvaliacao()
        {
                return $this->avaliacao;
        }

        public function setAvaliacao($avaliacao)
        {
                $this->avaliacao = $avaliacao;
        }

        public function getView()
        {
                return $this->view;
        }

        public function setView($view)
        {
                $this->view = $view;
        }

        public function getCurtidas()
        {
                return $this->curtidas;
        }

        public function setCurtidas($curtidas)
        {
                $this->curtidas = $curtidas;
        }

        public function getReproduzindo()
        {
                return $this->reproduzindo;
        }

        public function setReproduzindo($reproduzindo)
        {
                $this->reproduzindo = $reproduzindo;
        }

        //metodos
        public function play(){
                $this->setReproduzindo(true);
        }   
        public function pause(){
                $this->setReproduzindo(false);
        }
        public function like(){
                $this->curtidas ++;
        }


    }