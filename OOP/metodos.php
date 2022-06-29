<div class="titulo">Declarando métodos</div>

<ul>
  <li>Para declarar um método vamos utilizar a sintaxe de function, porém dentro de uma class;</li>
  <li>O restante é exatamente igual a sintaxe de função;</li>
  <li>Podemos retornar ou imprimir dados, dependendo da nossa regra de negócios;</li>
</ul>

<?php

  class Pessoa {

    function falar(){
      echo "Olá, eu sou um objeto! <br>";
    }

    function somar($a, $b) {
      echo $a + $b . "<br>";
    }
  }

  $velma = new Pessoa;
  $velma -> falar();

  $daphne = new Pessoa;
  $daphne -> falar();
  $daphne -> falar();

  $velma -> somar(2, 2);
  $daphne -> somar (4,4);