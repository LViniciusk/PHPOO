<?php


class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if ($this->tampada){
            print ("Caneta tampada, impossivel rabiscar");
        }else{
            print ("é o rabiscas..");
        }
    }
    
    function tampar(){
        $this -> tampada = true;
    }
    
    function destampar(){
        $this -> tampada = false;
    }
}
