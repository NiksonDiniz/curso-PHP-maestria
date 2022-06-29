<div class="titulo">Atividade 57</div>

<ul>  
  <li>Crie uma classe Cachorro com propriedades;</li>
  <li>Inicie as propriedades via constructor;</li>
  <li>Crie um método para exibir cada um das propriedades que você criou</li>
</ul>

<?php

  class Cachorro {

    public $nome;
    public $raca;
    public $porte;

    function __construct($nome, $raca, $porte)
    {
      $this->nome = $nome;
      $this->raca = $raca;
      $this->porte = $porte;
    }

    public function mostrarCachorro() {
      echo "O nome do cachorro é $this->nome, de raça $this->raca e porte $this->porte <br>";
    }

  }

  $rex = new Cachorro("Rex", "Pit-bull", "médio");

  echo $rex->nome . "<br>";

  echo $rex->mostrarCachorro();