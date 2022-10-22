<?php
    class Livro implements Publicacao {
        public $titulo;
        public $autor;
        public $totalPaginas;
        public $paginaAtual;
        public $aberto;
        public $leitor;

        function __construct($titulo, $autor, $totalPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totalPaginas = $totalPaginas;
            $this->leitor = $leitor;
            $this->aberto = false;
            $this->paginaAtual = 0;
        }

        function detalhes(){
            echo "<p>O/a leitor(a) ".$this->$leitor->nome.", ".$this->$leitor->idade.", ".$this->$leitor->idade."</p>";
            echo "<p>Está lendo o livro".$this->titulo." com ".$this->totalPaginas." páginas e está na página ".$this->paginaAtual."</p>";
        }

        function abrir(){
            if(!($this->aberto)){
                $this->aberto = true;
            }
        }

        function fechar(){
            if($this->aberto){
                $this->aberto = false;
            }
        }

        function folhear($pagina){
            if($pagina > 0 && $pagina < $this->totalPaginas){
                $this->paginaAtual = $pagina;
                return;
            }

            echo "<p>Não dá pra ir pra página ".$pagina."!</p>";
        }

        function avancarPagina(){
            if($this->paginaAtual < $this->totalPaginas){
                $this->paginaAtual += 1;
                return;
            }

            echo "<p>Não dá pra ir pra próxima página!</p>";
        }

        function voltarPagina(){
            if($this->paginaAtual > 0){
                $this->paginaAtual -= 1;
                return;
            }

            echo "<p>Não dá pra ir pra página anterior!</p>";
        }
    }