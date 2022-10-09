<?php 
    class Caneta {
        private $modelo;
        private $cor.
        private $ponta;
        private $tampada;

        public function Caneta($modelo, $cor, $ponta){
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->ponta = $ponta;
            $this->tampar();
        }

        public function tampar(){
            $this->tampada = true;
        }

        public function destampar(){
            $this->tampada = false;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($ponta){
            $this->ponta = $ponta;
        }
    }
?>