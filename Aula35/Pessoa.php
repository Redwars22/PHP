<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public aniversario(){
            $this->idade += 1;
        }
    }
?>