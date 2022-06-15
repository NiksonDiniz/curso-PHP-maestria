<div class="titulo">Objetos</div>

<ul>
  <li>PHP possui o paradigma de orientação a objetos;</li>
  <li>Podemos criar classes e objetos, e o objeto é considerado um tipo de dado;</li>
  <li>Objetos possuem métodos que são suas ações e propriedades que são suas características;</li>
</ul>

<?php
  // explicação simplificada de objeto, mais detalhes virão depois
  class Pessoa {

    function falar(){
      echo "Olá pessoal! <br>";
    }
  }

  $matheus = new Pessoa();
  $matheus->nome = 'Matheus';
  echo $matheus->nome;
  echo "<br>";
  $matheus->falar();