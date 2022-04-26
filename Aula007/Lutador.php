<?php 
    class Lutador{
        //atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;  
        private $derrotas;
        private $empates;

        //construct, getters & setters
        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }
        
        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
        }

        public function getNacionalidade()
        {
                return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade)
        {
                $this->nacionalidade = $nacionalidade;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;
        }

        public function getAltura()
        {
                return $this->altura;
        }

        public function setAltura($altura)
        {
                $this->altura = $altura;
        }

        public function getPeso()
        {
                return $this->peso;
        }

        public function setPeso($peso)
        {
                $this->peso = $peso;
                $this->setCategoria();
        }

        public function getCategoria()
        {
                return $this->categoria;
        }

        private function setCategoria()
        {
                if ($this->getPeso()< 52.2){
                    $this-> categoria  = "Inválido";
                }elseif($this->getPeso() <= 70.3){
                    $this-> categoria = "Leve";
                }elseif($this->getPeso() <= 83.9){
                    $this-> categoria = "Médio";
                }elseif($this->getPeso() <= 120.2){
                    $this-> categoria = "Pesado";
                }else{
                    $this-> categoria = "Inválido";
                }
        }

        public function getVitorias()
        {
                return $this->vitorias;
        }

        public function setVitorias($vitorias)
        {
                $this->vitorias = $vitorias;
        }

        public function getDerrotas()
        {
                return $this->derrotas;
        }

        public function setDerrotas($derrotas)
        {
                $this->derrotas = $derrotas;
        }

        public function getEmpates()
        {
                return $this->empates;
        }

        public function setEmpates($empates)
        {
                $this->empates = $empates;
        }

        //metodos

        public function apresentar(){
                print("<br>Lutador: ".$this->getNome());
                print("<br>Origem: ".$this->getNacionalidade());
                print("<br>Idade: ".$this->getIdade()." anos");
                print("<br>Altura: ".$this->getAltura()."m");
                print("<br>Peso: ".$this->getPeso()."kg");
                print("<br>Vitorias: ".$this->getVitorias());
                print("<br>Derrotas: ".$this->getDerrotas());
                print("<br>Empates: ".$this->getEmpates());
        }

        public function status(){
                print("<br>{$this->getNome()}");
                print("<br>peso {$this->getCategoria()}");
                print("<br>{$this->getVitorias()} vitorias");
                print("<br>{$this->getDerrotas()} derrotas");
                print("<br>{$this->getEmpates()} empates");
        }

        public function ganharLuta(){
                $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
                $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
                $this->setEmpates($this->getEmpates() + 1);
        }




    }




?>