<div class="titulo">Visibilidade</div>

<ul>
  <li>Temos três formatos de visibilidade: public, protected e private;</li>
  <li>public: A propriedade ou método pode ser acessada de qualquer forma;</li>
  <li>protected: A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma de herança;</li>
  <li>private: a propriedade ou método pode ser acessada apenas pela classe que foi criada;</li>
</ul>

<?php

  include __DIR__ . "/../error.php";

  class Car {

    public $rodas = 4;
    // public $vidro;

    // não pode ser acessado nem por herança
    protected $portas = 4;

    // private $rodas = 4;
    private $vidro = "sem película";

    // privado n pode ser alterado por método de outra classe
    // só se for da mesma classe
    public function pelicula($pelicula) {
      $this -> vidro = $pelicula;
    }

    public function getCarro(){
      return $this -> vidro;
    }

    public function getPortas(){
      return $this -> portas;
    }

  }

  class Mecanico{

    public function alterarRodas($carro) {
      $carro -> rodas = 10;
    } 

    public function colocarPelicula($carro) {
      $carro -> vidro = 'G20';
    }

  }

  $carro = new Car;
  echo $carro -> rodas . "<br>";

  $nikson = new Mecanico;
  $nikson -> alterarRodas($carro);
  // $nikson -> colocarPelicula($carro);

  echo $carro -> rodas . "<br>";

  // se vidro for private não da pra acessar assim
  // só por método de classe
  // echo $carro -> vidro . "<br>";

  // usando o método de classe
  echo $carro ->getCarro() . "<br>";

  // não pode ser acessado
  // echo $carro -> portas . "<br>"; # error fatal

  // pode ser acessada por método da classe
  echo $carro ->getPortas() . "<br>";