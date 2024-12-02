<?php 
    class ContaBanco {
        // Atributos 
        /* 
        + numConta
        # tipo
        - dono
        - saldo
        -status
        */
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos Especiais
        public function __construct()
        {
            $this->saldo = 0;
            $this->status = false;
        }
        public function setNumConta($n) {
            $this->numConta = $n;
        }
        public function getNumConta() {
            return $this->numConta;
        }
        public function setTipo($t) {
            $this->tipo = $t;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setDono($d) {
            $this->dono = $d;
        }
        public function getDono() {
            return $this->dono;
        }
        public function setSaldo($s) {
            $this->saldo = $s;
        }
        public function getSaldo() {
            return $this->saldo;
        }
        public function setStatus() {

        }

        // Métodos
        /* 
        + abrirConta()
        + fecharConta()
        + depositar()
        + sacar()
        + pagarMensal()
        */
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t = "CC") {
                $this->saldo = 50;
            } elseif ($t = "CP") {
                $this->saldo = 150;
            }
        }
        public function fecharConta() {
            if ($this->saldo > 0) {
                echo "Conta com dinheiro";
            } elseif ($this->saldo < 0) {
                echo "Conta em débito";
            } else {
                $this->setStatus(false);
            }
        }
        public function depositar($v) {
            if ($this->status = true) {
                $this->setSaldo($this->getSaldo() + $v);
            } else {
                echo "Impossível depositar";
            }
        }
        public function sacar($v) {
            if ($this->status = true) {
                if ($this->saldo > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                } else {
                    echo "Saldo insuficiente";
                }
            } else {
                echo "Impossível sacar";
            }
        }
        public function pagarMensal() {
            //$v;
            if ($this->tipo = "CC") {
                $v = 12;
            } elseif ($this->tipo = "CP") {
                $v = 20;
            }
            if ($this->status = true) {
                if ($this->saldo > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                } else {
                    echo "Saldo insuficiente";
                }
            } else {
                echo "Impossível pagar";
            }
        }
    }
?>