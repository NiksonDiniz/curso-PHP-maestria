<div class="titulo">Herança</div>

<ul>
  <li>A herança é o recurso da OOP que dá a possibilidade de uma classe herdar métodos e propriedades de outra;</li>
  <li>A palavra reservada é extends;</li>
  <li>Exemplo:<br>class Programador extends Pessoa {<br>}</li>
</ul>

<?php

  class Humano {
    public $idade = 29;

    public function falar() {
      echo "Olá mundo! <br>";
    }

    private function gritar() {
      echo "PHP é muito bommm! <br>";
    }

    public function getGritar(){
      $this -> gritar(); 
    }

    protected function falarBaixo(){
      echo "lalalala <br>";
    }

    public function getFalar() {
      $this -> falarBaixo();
    }

  }

  class Programador extends Humano {
    // private não permiti o uso
    public function getGritarProgramador(){
      // $this -> gritar(); 
    }

    // protect permite usar aqui
    public function getFalarProgramador() {
      $this -> falarBaixo();
    }
  }

  $ze = new Humano;
  $ze -> falar();
  $ze -> getGritar();
  $ze -> getFalar();

  echo "<br>";

  $matheus = new Programador;
  $matheus -> falar();
  $matheus -> getGritar();
  $matheus -> getFalar();
  $matheus -> getFalarProgramador();