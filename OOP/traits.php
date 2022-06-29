<div class="titulo">Checando ancestralidade</div>

<ul>
  <li>As traits permitem o reuso do código sem hierarquia de classes, ou seja, sem herança;</li>
  <li>Podemos assim utilizar os métodos da classe que foi feita a trait;</li>
  <li>Utilizamos a palavra reservada use;</li>
  <li>Exemplo;<br>class Teste { <br>use ClasseTrait </li>
</ul>

<?php

  trait Objeto {
    public function teste() {
      echo "Testando trait de objeto <br>";
    }
  }

  trait Testando {
    public $y = 10;
    public function traitTeste(){
      echo "Método da trait testando. <br>";
    }
  }

  class Central {
    use Objeto;
    use Testando;
  }

  $x = new Central;
  $x->teste();
  echo $x->y . "<br>";
  $x->traitTeste();