<?php
    require_once 'Mamifero.php';
    class Canguru extends Mamifero{
        //atributos

        //construct, getters & setters

        //metodos
        public function usarBolsa(){
                print("<p>Usando bolsa</p>");
        }

        public function locomover(){
                print("<p>Saltando</p>");
        }
        
    }
