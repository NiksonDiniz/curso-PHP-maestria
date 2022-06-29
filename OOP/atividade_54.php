<div class="titulo">Atividade 54</div>

<ul>
  <li>Crie uma classe Pessoa;</li>
  <li>Crie a propriedade nome e idade;</li>
  <li>E também um método andar;</li>
</ul>

<?php

  class Pessoa {

    public $nome;
    public $idade;

    function andar($m){
      echo "Andou $m metros.";
    }

  }

  $scoobyLoo = new Pessoa;
  $scoobyLoo -> nome = "Scooby Loo";
  $scoobyLoo -> idade = 3;

  echo $scoobyLoo -> nome . "<br>";
  echo $scoobyLoo -> idade . " de idade<br>";
  echo $scoobyLoo -> andar(100) . "<br>";