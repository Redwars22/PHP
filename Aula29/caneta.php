<?php 

class caneta {
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  function rabiscar(){
    if($this->tampada)
      echo "ERRO! Caneta tampada";
    else echo "Rabiscando...";
  }

  function tampar(){
    $this->tampada = true;
  }

  function destampar(){
    $this->tampada = false;
  }
}
?>