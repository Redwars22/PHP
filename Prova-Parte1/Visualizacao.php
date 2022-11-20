<?php
    require_once "Gafanhoto.php";
    require_once "Video.php";

    public class Visualizacao {
        private $expectador;
        private $filme;

        public function __constructor($expectador, $filme){
            $this->expectador = $expectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->expectador->setTotAssistidos($this->expectador->getTotAssistidos() + 1);

            public function avaliar(){
                $this->filme->setAvaliacao(5);
            }

            public function avaliar($nota){
                $this->filme->setAvaliacao($nota);
            }

            public function avaliar($porcentagem){
                $nova = 0

                if($porcentagem <= 20){
                    $nova = 3;
                } elseif ($porcentagem <= 50){
                    $nova = 5;
                } elseif ($porcentagem <= 90){
                    $nova = 8;
                } else {
                    $nova = 10;
                }
                $this->filme->setAvaliacao($porcentagem);
            }

            public function getExpectador(){
                return $this->expectador;
            }
        
            public function setExpectador($expectador){
                $this->expectador = $expectador;
            }
        
            public function getFilme(){
                return $this->filme;
            }
        
            public function setFilme($filme){
                $this->filme = $filme;
            }
        }
    }
?>