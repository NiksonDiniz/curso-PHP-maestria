<div class="titulo">Declarando Variáveis</div>

<ul>
  <li>São a forma que temos para declarar um valor e salvá-lo na memória;</li>
  <li>Uma variável em PHP tem o $ na frente do seu nome;</li>
  <li>Ex: $nome = “Matheus”;</li>
  <li>Podemos salvar qualquer tipo de dado;</li>
  <li>Podemos alterar o valor de uma variável no decorrer do programa;</li>
  <li>Podemos imprimir o valor de uma variável com echo;</li>
</ul>

<?php 
  // mantenha um padrão se for camelCase fique só no camelCase
  $teste = "Algum texto <br>";
  echo $teste;

  $num = 10;
  echo $num ."<br>";

  $_nome = 'Matheus';
  echo $_nome . '<br>';

  $velocidadeMaxima = 100;
  $velocidade_maxima = 100;