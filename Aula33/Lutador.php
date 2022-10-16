<?php
  class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
      $this->nome = $nome;
      $this->nacionalidade = $nacionalidade;
      $this->idade = $idade;
      $this->altura = $altura;
      $this->peso = $peso;
      $this->vitorias = $vitorias;
      $this->derrotas = $derrotas;
      $this->empates = $empates;
      
      $this->setCategoria($this->peso);
    }

    public function apresentar(){
      echo "<p>Apresentamos ".$this->getNome().", vindo de ".$this->nacionalidade." , idade ".$this->idade.", altura ".$this->altura."m, ".$this->vitorias." vitorias, ".$this->derrotas." derrotas e ".$this->empates." empates</p>";
    }

    public function status(){
      echo "<p>".$this->nome.", ".$this->categoria.", Vitórias: ".$this->vitorias.", Derrotas: ".$this->derrotas.", Empates: ".$this->empates."</p>";
    }

    public function ganharLuta(){
      $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
      $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
      $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome(){
		  return $this->nome;
  	}
  
  	public function setNome($nome){
  		$this->nome = $nome;
  	}
  
  	public function getNacionalidade(){
  		return $this->nacionalidade;
  	}
  
  	public function setNacionalidade($nacionalidade){
  		$this->nacionalidade = $nacionalidade;
  	}
  
  	public function getIdade(){
  		return $this->idade;
  	}
  
  	public function setIdade($idade){
  		$this->idade = $idade;
  	}
  
  	public function getAltura(){
  		return $this->altura;
  	}
  
  	public function setAltura($altura){
  		$this->altura = $altura;
  	}
  
  	public function getPeso(){
  		return $this->peso;
  	}
  
  	public function setPeso($peso){
  		$this->peso = $peso;
  	}
  
  	public function getCategoria(){
  		return $this->categoria;
  	}
  
  	public function setCategoria($peso){
      if($peso <= 52.2){
        $this->categoria = "inválido";
      } else if($peso <= 70.3){
        $this->categoria = "leve";
      } else if($peso <= 83.9){
        $this->categoria = "médio";
      } else if($peso <= 120.3){
        $this->categoria = "pesado";
      } else {
        $this->categoria = "inválido";
      }
  	}
  
  	public function getVitorias(){
  		return $this->vitorias;
  	}
  
  	public function setVitorias($vitorias){
  		$this->vitorias = $vitorias;
  	}
  
  	public function getDerrotas(){
  		return $this->derrotas;
  	}
  
  	public function setDerrotas($derrotas){
  		$this->derrotas = $derrotas;
  	}
  
  	public function getEmpates(){
  		return $this->empates;
  	}
  
  	public function setEmpates($empates){
  		$this->empates = $empates;
  	}
  }
?>