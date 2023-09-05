<?php
namespace App\model;

class Carro {
    
    public $marca;
    public $modelo;
    public $ano;
    public $cor;

    public function __construct($marca, $modelo, $ano, $cor) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;

}

  }
?>