<?php
    require_once 'Lutador.php';
    class Luta{
        //atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //construct, getters & setters
        public function __construct(){


        }
        public function getDesafiado()
        {
                return $this->desafiado;
        }

        public function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;
        }

        public function getDesafiante()
        {
                return $this->desafiante;
        }

        public function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;
        }

        public function getRounds()
        {
                return $this->rounds;
        }

        public function setRounds($rounds)
        {
                $this->rounds = $rounds;
        }

        public function getAprovada()
        {
                return $this->aprovada;
        }

        public function setAprovada($aprovada)
        {
                $this->aprovada = $aprovada;
        }

        //metodos

        public function marcarLuta($l1, $l2){
                if (($l1->getCategoria() == $l2->getCategoria()) && ($l1 != $l2)){
                    $this->aprovada = true;
                    $this->desafiado = $l1;
                    $this->desafiante = $l2;
                }else{
                    $this->aprovada = false;
                    $this->desafiado = null;
                    $this->desafiante = null;
                }
        }

        public function lutar(){
                if($this->aprovada){
                    $this->desafiado->apresentar();
                    print "<br>";
                    $this->desafiante->apresentar();
                    $vencedor = rand(0,2);
                    switch ($vencedor){
                        case 0: //Empate
                            print("<br>Empate");
                            $this->desafiado->empatarLuta();
                            $this->desafiante->empatarLuta();
                            break;
                        case 1: //Desafiado ganha
                            print("<br>{$this->desafiado->getNome()} vence.");
                            $this->desafiado->ganharLuta();
                            $this->desafiante->perderLuta();
                            break;
                        case 2: //Desafiante ganha
                            print("<br>{$this->desafiante->getNome()} vence.");
                            $this->desafiante->ganharLuta();
                            $this->desafiado->perderLuta();
                    }

                }else{
                    print("Luta não pode acontecer");
                }
        }
    }


?>
