<?php
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero{
        

        public function reagirF($frase){
                if($frase == "ok"){
                    print("feliz");
                }else{
                    print("triste");
                }
        }

        public function reagirH($hora, $min){
                if ($hora <12){
                    print("feliz");
                }elseif($hora >= 18){
                    print("triste");
                }else{
                    print("ignorar");
                }
        }

        public function reagirD($dono){
                if($dono){
                    print("feliz");
                }else{
                    print("raiva");
                }
        }

        public function reagirIP(){
                if($this->getIdade() < 5){
                    if($this->getPeso() <10){
                        print("feliz");
                    }else{
                        print("triste");
                    }
                }else{
                    if($this->getPeso() <10){
                        print("triste");
                    }else{
                        print("feliz");
                    }
                }
        }

        public function emitirSom(){
            print("<p>Latido</p>");
        }
    }