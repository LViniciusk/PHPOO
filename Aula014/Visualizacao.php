<?php
    require_once 'Espectador.php';
    require_once 'video.php';
    class Visualizacao{
        //atributos
        private $espectador;
        private $filme;

        //construct, getters & setters
        public function __construct($spec, $film){
            $this->setEspectador($spec);
            $this->setFilme($film);

            $film->setView($film->getView()+1);
            $spec->setTotAssistido($spec->getTotAssistido() +1);
        }

        public function getEspectador()
        {
                return $this->espectador;
        }

        public function setEspectador($espectador)
        {
                $this->espectador = $espectador;
        }

        public function getFilme()
        {
                return $this->filme;
        }

        public function setFilme($filme)
        {
                $this->filme = $filme;
        }

        //metodos
        public function avaliar(){
                $this->filme->setAvaliacao(5);
        }

        public function avaliarN($n){
                $this->filme->setAvaliacao($n);
        }

        public function avaliarP($p){
                $nova = 0;
                if ($p){
                    $nova = 3;
                }elseif ($p <=50){
                    $nova = 5;
                }elseif($p >50 <=90){
                    $nova = 8;
                }else{
                    $nova = 10;
                }
                $this->filme->setAvaliacao($nova);

        }
    }


