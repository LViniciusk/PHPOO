<?php 
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador{
        //atributos
        private $volume;
        private $ligado;
        private $tocando;

        //construct, getters & setters
        public function __construct(){
            $this-> volume = 50;
            $this-> ligado = false;
            $this-> tocando = false;
        }

        private function getVolume()
        {
                return $this->volume;
        }

        private function setVolume($volume)
        {
                $this->volume = $volume;
        }

        private function getLigado()
        {
                return $this->ligado;
        }

        private function setLigado($ligado)
        {
                $this->ligado = $ligado;
        }

        private function getTocando()
        {
                return $this->tocando;
        }

        private function setTocando($tocando)
        {
                $this->tocando = $tocando;
        }

        //metodos

        public function ligar(){
            $this-> setLigado(true);
        }

        public function desligar(){
            $this-> setLigado(false);
        }

        public function abrirMenu(){
            print("<br>Ligado: ".($this->getLigado()?"Sim":"Não")."<br>");
            print("Volume: ".$this->getVolume()."<br>");
            for ($i=0;$i<=$this->getVolume();$i+=5){
                print("|");
            }
            print("<br>Tocando: ".($this->getTocando()?"Sim":"Não")."<br>");
        }

        public function fecharMenu(){
            print("Fechando menu. . . <br>");
        }

        public function maisVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
        }

        public function menosVolume(){
            if ($this->getLigado() && $this->getVolume() >= 5){
                $this->setVolume($this->getVolume() - 5);
            }
        }

        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }

        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }

        public function play(){
            if ($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }

        public function pause(){
            if ($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }





?>