<div class="titulo">Interface</div>

<ul>
  <li>As interfaces criam um modelo de definição de uma classe;</li>
  <li>Então toda classe que implementar uma interface, deverá implementar também suas propriedades e métodos, obrigatoriamente;</li>
  <li>A palavra reservada é implements;</li>
  <li>Exemplo: <br>class Humano implements Caracteristicas</li>
</ul>

<?php

  interface Caracteristicas {

    const NOME = 'bart';

    public function falar();

  }

  class Humano implements Caracteristicas {

    public $idade = 29;

    public function falar(){
      echo "Olá meu amigo!";
    }

    public function mostrarNome(){
      echo self::NOME;
    }

  }

  $bart = new Humano;
  $bart ->mostrarNome();