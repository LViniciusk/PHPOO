<?php


class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada){
            print ("Caneta tampada, impossivel rabiscar");
        }else{
            print ("é o rabiscas..");
        }
    }
    
    public function tampar(){
        $this -> tampada = true;
    }
    
    public function destampar(){
        $this -> tampada = false;
    }
}
