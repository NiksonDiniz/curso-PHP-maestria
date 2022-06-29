<div class="titulo">Constantes em classes</div>

<ul>
  <li>As constantes são parecidas com variáveis, salvam valores em memória;</li>
  <li>Porém o seu valor não pode ser alterado;</li>
  <li>Exemplo de sintaxe:<br>public const CHAVE_API = “ASO793mJJs39”;</li>
</ul>

<?php

  class Humano {
    
    // para declarar não é necessario $
    public const OLHOS = 2;
    public const BOCA = 1;
    public const PERNAS = 2;

    // para acessar com método
    function mostrar(){

      // usa-se self
      echo self::OLHOS . "<br>";
    }
  }

  $nikson = new Humano;

  // para acessar const usa-se sintaxe de :: dois pontos
  echo $nikson::OLHOS . "<br>";
  echo $nikson::BOCA . "<br>";
  echo $nikson -> mostrar();