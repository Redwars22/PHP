<?php
  require_once "controlador.php";
  
  class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    
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
    
    public function maisVolume(){}
    
    public function menosVolume(){}
    
    public function pause(){}
    
    public function play(){}
    
    public function abrirMenu(){
      echo "<br>---- MENU ----";
      echo "<br>Está ligado? ".($this->getLigado() ? "SIM" : "NÃO");
       echo "<br>Está tocando? ".($this->getTocando() ? "SIM" : "NÃO");
    }
    
    public function fecharMenu(){
      
    }
  }
