<?php 
    class ContaBanco{
        //atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status; 

        //Construct, getters & setters
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);

            print("<p>Conta Construida com Sucesso</p>");
        }

        public function getNumConta(){
                return $this->numConta;
        }

        public function setNumConta($numConta){
                $this->numConta = $numConta;
        }

        public function getTipo(){
                return $this->tipo;
        }

        public function setTipo($tipo){
                $this->tipo = $tipo;
        }

        public function getDono(){
                return $this->dono;
        }

        public function setDono($dono){
                $this->dono = $dono;
        }

        public function getSaldo(){
                return $this->saldo;
        }

        public function setSaldo($saldo){
                $this->saldo = $saldo;
        }

        public function getStatus(){
                return $this->status;
        }

        public function setStatus($status){
                $this->status = $status;
        }
        

        //metodos
        public function abrirConta($t){
                $this->setTipo($t);
                $this->setStatus(true);
                if ($t =="CC"){
                    $this->setSaldo(50);
                }elseif($t =="CP"){
                    $this->setSaldo(150);
                }
        }

        public function fecharConta(){
                if ($this->getSaldo() > 0){
                    print ("ERRO: Conta com dinheiro");
                }elseif ($this->getSaldo() < 0){
                    print ("ERRO: Conta em debito");
                }else {
                    $this->setStatus(false);
                }
        }

        public function depositar($v){
                if($this->getStatus()){
                    $this->setSaldo($this->getSaldo() + $v);
                }else{
                    print ("ERRO: Conta fechada");
                }
        }

        public function sacar($v){
                if($this->getStatus()){
                    if ($this->getSaldo() >= $v){
                        $this->setSaldo($this->getSaldo() - $v);
                        print("<p>Saque de R$$v autorizado na conta do(a) {$this->getDono()}</p>");
                    }else{
                        print("Saldo Insuficiente");
                    }
                }else{
                    print("ERRO: Conta fechada");
                }
        }

        public function pagarMensal(){
                if ($this->getTipo() == "CC"){
                    $v = 12;
                }elseif($this->getTipo() == "CP"){
                    $v = 20;
                }
                if($this->getStatus()){
                    if($this->getSaldo() >= $v){
                        $this->setSaldo($this->getSaldo() - $v);
                    }else{
                        print("Saldo Insuficiente");
                    }
                }else{
                    print("Impossivel pagar");
                }
        }

        
    }






?>