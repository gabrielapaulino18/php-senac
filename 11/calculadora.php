<?php

class Calculadora {
    public function somar($a, $b) {
        return $a + $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

}

echo Calculadora::multiplicar(5, 5);


?>