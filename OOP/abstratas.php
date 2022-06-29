<div class="titulo">Classes abstratas</div>

<ul>
  <li>As classes abstratas não podem ser instanciadas;</li>
  <li>Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata;</li>
  <li>A palavra reservada tanto para classes como para métodos é abstract;</li>
  <li>Exemplo;<br>abstract class ClasseAbstrata { }</li>
</ul>

<?php

  include_once __DIR__ . "/../error.php";

  abstract class Teste {
    public static function testandoClasse(){
      echo "Método de uma classe abstrata. <br>";
    }

    abstract public function testeAbs();
  }

  // não se pode instanciar classe abstrata
  # $t = new Teste;

  // chamando a classe direto depois de tornar ela static
  Teste::testandoClasse();

  class Nova extends Teste {
    // é obrigatório implementar método testeabs
    public function testeAbs()
    {
      echo "Teste ABS <br>";
    }

  }

  $n = new Nova;