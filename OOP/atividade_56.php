<div class="titulo">Atividade 56</div>

<ul>
  <li>Crie uma classe Humano com algumas propriedades e o método falar;</li>
  <li>Crie uma outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe;</li>
  <li>Exiba os valores das propriedades da classe pai e também utilize os métodos;</li>
</ul>

<?php

  class Humano {
    public $nome;
    public $altura;
    public $peso;

    public function falar(){
      return "Olá, tudo bem? <br>";
    }
  }

  class Professor extends Humano {

    public $inteligente;

    public function ensinar() {
      echo "Estou ensinando! <br>";
    }
  }

  $bart = new Humano;
  $bart -> nome = 'Bart';
  $bart -> altura = 1;
  $bart -> peso = 60;

  echo "O personagem $bart->nome, mede $bart->altura metro e pesa $bart->peso kg. <br>";
  echo "O $bart->nome chega e fala: " . $bart->falar();