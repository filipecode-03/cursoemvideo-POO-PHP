<?php 
    class Colirio {
        var $cor;
        var $tampada;

        function pingar() {
            if ($this->tampada == true) {
                echo "<h2>Não posso pingar o colirio no olho</h2>";
            } else {
                echo "<h2>Posso pingar o colirio no olho</h2>";
            }
        }
        function tampar() {
            $this->tampada = true;
        }
        function destampar() {
            $this->tampada = false;
        }
    }
?>