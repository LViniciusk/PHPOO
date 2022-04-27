<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao{
        //atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //construct, getters & setters

        public function __construct($t, $aut, $totP, $leit){
                $this->titulo = $t;
                $this->autor = $aut;
                $this->totPaginas = $totP;
                $this->aberto = false;
                $this->pagAtual = 0;
                $this->leitor = $leit;
        }

        public function getTitulo()
        {
                return $this->titulo;
        }

        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;
        }

        public function getAutor()
        {
                return $this->autor;
        }

        public function setAutor($autor)
        {
                $this->autor = $autor;
        }

        public function getPagAtual()
        {
                return $this->pagAtual;
        }

        public function setPagAtual($pagAtual)
        {
                $this->pagAtual = $pagAtual;
        }

        public function getTotPaginas()
        {
                return $this->totPaginas;
        }

        public function setTotPaginas($totPaginas)
        {
                $this->totPaginas = $totPaginas;
        }

        public function getLeitor()
        {
                return $this->leitor;
        }

        public function setLeitor($leitor)
        {
                $this->leitor = $leitor;
        }

        public function getAberto()
        {
                return $this->aberto;
        }

        public function setAberto($aberto)
        {
                $this->aberto = $aberto;
        }

        //metodos

        public function abrir(){
                $this->setAberto(true);
        }

        public function fechar(){
                $this->setAberto(false);
        }

        public function folhear($p){
                if ($this->getAberto()){
                    if($p > $this->getTotPaginas()){
                         //não faz nada
                    }else{
                        $this->setPagAtual($p);
                    }
                }
        }

        public function avancarPag(){
                if($this->getPagAtual() < $this->getTotPaginas()){
                    $this->setPagAtual($this->getPagAtual() + 1);
                }
        }

        public function voltarPag(){
                if($this->getPagAtual() > 0){
                    $this->setPagAtual($this->getPagAtual() - 1);
                }
        }

        public function detalhes(){

        }
    }