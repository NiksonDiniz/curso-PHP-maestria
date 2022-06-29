<div class="titulo"></div>

<ul>
  <li>Pelos construtores podemos inicializar objetos com valores de propriedades únicos para cada objeto;</li>
  <li>Passamos como argumentos os valores das propriedades;</li>
  <li>Exemplo: <br>function __construct($portas, $motor, $teto_solar) {<br>}</li>
</ul>

<?php

  class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {

      $this->portas = $portas;
      $this->cor = $cor;
      $this->marca = $marca;

    }
  }

  $fusca = new Car(4, 'preto', 'Volkswagen');

  echo "O carro é da marca $fusca->marca e de cor $fusca->cor.<br>";

  $gol = new Car(4, 'azul', 'volkswagen');

  echo "O carro é da marca $gol->marca e de cor $gol->cor.<br>";