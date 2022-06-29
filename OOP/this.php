<div class="titulo">Conhecendo o $this</div>

<ul>
  <li>O $this se refere a instância atual do objeto;</li>
  <li>Podendo assim alterar um valor de uma propriedade do objeto com: $this->proriedade = “x”;</li>
  <li>Tradução literal = este;</li>
  <li>Podemos invocar um método do objeto com this também;</li>
</ul>

<?php

  class Animal {

    public $nome;

    function escolherNome($nome){
      $this -> nome = $nome;
    }

    function miar($miado){
      return $miado;
    }

    function miarForte($miado){
      return strtoupper($this -> miar($miado));
    }
  }

  $gato = new Animal;
  $gato -> escolherNome("Lily");

  echo $gato -> nome . "<br>";
  echo $gato -> miar("Miauuuuu") . "<br>";
  echo $gato -> miarForte("Miauuuuu");