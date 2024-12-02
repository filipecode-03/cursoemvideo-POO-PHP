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
            } else {
                
            }
        }
        public function fecharConta() {

        }
        public function depositar() {

        }
        public function sacar() {

        }
        public function pagarMensal() {

        }
    }
?>