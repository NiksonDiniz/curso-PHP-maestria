<div class="titulo">Atividade 55</div>

<ul>
  <li>Crie uma classe Carro;</li>
  <li>Crie algumas propriedades e também a propriedade velocidade_maxima;</li>
  <li>Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;</li>
  <li>e também o getVelocidadeMaxima onde é possível imprimir a velocidade do carro;</li>
</ul>

<?php

  class Carro {
    public $cor = "preto";
    public $portas = 4;
    public $motor = 2.0;
    public $velocidade_maxima = 400;

    function setVelocidadeMaxima($velocidade) {
      return $this -> velocidade_maxima = $velocidade;
    }

    function getVelocidadeMaxima(){
      echo $this -> velocidade_maxima;
    }
  }

  $fusca = new Carro;
  $fusca -> setVelocidadeMaxima(300);
  $fusca -> getVelocidadeMaxima();