<?php
   
   include_once __DIR__ . "/../vendor/autoload.php";
   use App\model\Pessoa;


  $p = new Pessoa("Thiago", 16);

  echo $p->nome;

  use App\model\Carro;
  
$carro1 = new Carro("Toyota", "Corolla", 2022, "Prata");

?>


  