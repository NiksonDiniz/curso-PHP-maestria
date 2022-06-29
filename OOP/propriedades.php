<div class="titulo">Declarando propriedades</div>

<ul>
  <li>Para declarar propriedades vamos basicamente criar uma variável dentro de uma class;</li>
  <li>Porém precisamos definir a sua privacidade, como por exemplo public;</li>
  <li>Uma propriedade pública pode ser acessada fora do escopo do objeto;</li>
  <li>Exemplo: <br>public $idade = 29;</li>
</ul>

<?php

  class Carro {

    public $portas = 4;
    public $rodas = 4;
    public $aro = 20;

    function Acelerar(){}

  }

  $fusca = new Carro;

  // aqui n se usa o $portas, somente portas
  echo $fusca -> portas . "<br>";
  echo $fusca -> rodas . "<br>";
  echo $fusca -> aro . "<br>";

  // para reatribuir valor
  $fusca -> portas = 10;
  echo $fusca -> portas . "<br>";