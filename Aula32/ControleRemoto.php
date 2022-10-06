<?php
  require_once "Controlador.php";
  
  class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
      $this->setVolume(20);
      $this->setLigado(true);
      $this->setTocando(false);
    }
    
    private function getVolume(){
      return $this->volume;
    }
    
    private function setVolume($volume){
      $this->volume = $volume;
    }
    
    private function getLigado(){
      return $this->ligado;
    }
    
    private function setLigado($ligado){
      $this->ligado = $ligado;
    }
    
    private function getTocando(){
      return $this->tocando;
    }
    
    private function setTocando($tocando){
      $this->tocando = $tocando;
    }
    
    public function ligar(){
      $this->setVolume(20);
      $this->setLigado(true);
      $this->setTocando(false);
    }

    public function desligar(){
      if($this->getLigado()){
        $this->getLigado(false);
        echo "<br>Desligando...</br>";
      }
    }

    public function ligarMudo(){
      if($this->getLigado() && $this->getVolume() > 0){
        $this->setVolume(0);
        echo "🔇 MUDO...";
      }
    }

    public function desligarMudo(){
      if($this->getLigado() && $this->getVolume() == 0){
        $this->setVolume(50);
        echo "🔊 Saindo do mudo...";
      }
    }

    public function maisVolume(){
      $this->setVolume($this->getVolume() + 10);
    }

    public function menosVolume(){
      $this->setVolume($this->getVolume() - 10);
    }
    
    public function pause(){
      if($this->getLigado() && $this->getTocando()){
        $this->setTocando(false);
        echo "FILME EM PAUSE...";
      } else {
        echo "IMPOSSÍVEL PAUSAR...";
      }
    }
    
    public function play(){
      if($this->getLigado() && !($this->getTocando())){
        $this->setTocando(true);
        console.log('EXIBINDO FILME...');
      }
    }
    
    public function abrirMenu(){
      echo "<br>---- MENU ----";
      echo "<br>Está ligado? ".($this->getLigado() ? "SIM" : "NÃO");
      echo "<br>Está tocando? ".($this->getTocando() ? "SIM" : "NÃO");
      echo "<br>Volume:".$this->getVolume();

      for($i = 1; $i <= $this->getVolume(); $i+=10){
        echo " | ";
      }
    }
    
    public function fecharMenu(){
      echo "Fechando menu";
    }
  }
?>