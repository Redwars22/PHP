<?php
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($tipo){
            $this->setTipo($tipo);
            $this->setStatus(true);

            echo "Conta criada...";
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>A conta ainda tem dinheiro. Não é possível fechá-la!<p/>";
            } else if($this->getSaldo() < 0){
                echo "<p>Você possui débitos. Não é possível fechar a conta!</p>";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($valor){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $valor)
            } else {
                echo "<p>Não é possível depositar. Conta inativa!</p>"
            }
        }

        public function sacar($valor){
            if($this->getStatus()){
                if($this->getSaldo() > $valor){
                    $this->setSaldo($this->getSaldo - $valor);
                } else {
                    echo "<p>Saldo insuficiente para saque</p>";
                }
            } else {
                echo "<p>A conta está fechada! Não é possível sacar!</p>";
            }
        }

        public function pagarMensal(){
            $taxa = 0;
            if($this->getTipo() == "CC"){
                $taxa = 12;
            } else if ($this->getTipo() == "CP"){
                $taxa = 20;
            }

            if($this->getStatus()){
                $this->setSaldo($this-<getSaldo() - $taxa);
            } else {
                echo "<p><Problemas com a conta. Não é possível cobrar a taxa!/p>"
            }
        }

        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function getNumConta (){
            return $this->numConta;
        }

        public function getTipo (){
            return $this->tipo;
        }

        public function getDono (){
            return $this->dono;
        }

        public function getSaldo (){
            return $this->saldo;
        }

        public function getStatus (){
            return $this->status;
        }

        public function setNumConta ($conta){
            $this->numConta = $conta;
        }

        public function setTipo ($tipo){
            $this->tipo = $tipo;
        }

        public function setDono ($dono){
            $this->dono = $dono;
        }

        public function setSaldo ($saldo){
            $this->saldo = $saldo
        }

        public function setStatus ($status){
            $this->status = $status
        }
    }
?>