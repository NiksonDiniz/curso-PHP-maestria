<div class="titulo">Checando ancestralidade</div>

<ul>
  <li>Para checar a ancestralidade de uma classe utilizamos o operador instanceof;</li>
  <li>Podemos inserir essa operação em um if, pois vai retornar um booleano;</li>
  <li>Exemplo: <br>$objeto instanceof Humano</li>
</ul>

<?php

  class Humano {}
  class Animal {}
  class Felino extends Animal {}

  $gato = new Animal;
  $homem = new Humano;
  $onca = new Felino;

  $checando = $gato instanceof Humano ? "É humano" : "Não é Humano";
  echo "$checando <br>";
  
  $checando = $homem instanceof Humano ? "É humano" : "Não é Humano";
  echo "$checando <br>";

  $checando = $onca instanceof Animal ? "É um animal felino" : "Não é um felino";
  echo "$checando <br>";