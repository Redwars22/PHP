<?php
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($l1, $l2){
            if ($l1.getCategoria() == $l2.getCategoria() && $l1 != $l2){
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                $this->aprovada = false;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }
        }

        public function lutar(){
            if($this->aprovada){
                $this->desafiado.apresentar();
                $this->desafiante.apresentar();
                $this->vencedor = rand(0, 2);

                switch($this->vencedor){
                    case 0:
                        echo "<p>Empatou</p>";
                        $this->desafiado.empatarLuta();
                        $this->desafiante.empatarLuta();
                        break;
                    case 1:
                        echo "<p>".$this->desafiado.getNome()."</p>";
                        $this->desafiado.ganharLuta();
                        $this->desafiante.perderLuta();
                        break;
                    case 2:
                        echo "<p>".$this->desafiante.getNome()."</p>";
                        $this->desafiado.perderLuta();
                        $this->desafiante.ganharLuta();
                        break;
                }
            } else {
                echo "<p>A luta não pode acontecer</p>";
            }
        }

        public function getDesafiado(){
            return $this->desafiado;
        }
    
        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
    
        public function getDesafiante(){
            return $this->desafiante;
        }
    
        public function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
    
        public function getRounds(){
            return $this->rounds;
        }
    
        public function setRounds($rounds){
            $this->rounds = $rounds;
        }
    
        public function getAprovada(){
            return $this->aprovada;
        }
    
        public function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }
    }
?>