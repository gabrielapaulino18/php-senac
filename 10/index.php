<?php

class Carro {
    // Propriedades
    public $marca;
    public $modelo;
    public $ano;

    //Método Construtor
    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = 2024;
    }

    // Funçaõ / Comportamento / Método
    public function ligar() {
        echo "O carro está ligado";
    }
}

$meuCarro = new Carro("Toyota", "Corolla");
echo "$meuCarro->marca, $meuCarro->modelo, $meuCarro->ano";

?>