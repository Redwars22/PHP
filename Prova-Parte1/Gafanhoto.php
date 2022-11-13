<?php
    require_once "Pessoa.php";

    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistidos;

        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistidos = 0;
        }

        public function assistirMaiusUm(){
            $this->totAssistidos++;
        }

        public function getLogin(){
            return $this->login;
        }
    
        public function setLogin($login){
            $this->login = $login;
        }
    
        public function getTotAssistidos(){
            return $this->totAssistidos;
        }
    
        public function setTotAssistidos($totAssistidos){
            $this->totAssistidos = $totAssistidos;
        }
    }
?>