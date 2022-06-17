<div class="titulo">Atividade 21</div>

<ul>
  <li>Faça as seguintes verificações em estruturas if:</li>
  <li>5 é maior que 2?</li>
  <li>Matheus é diferente de Pedro</li>
  <li>12 é menor ou igual a 11</li>
  <li>Você deve inserir os valores em variáveis;</li>
</ul>

<?php
  $condição_1 = 5 > 2;
  $condição_2 = "Matheus" != "Pedro";
  $condição_3 = 12 <= 11;

  if($condição_1){
    echo "Condição verdadeira 1<br>";
  }

  if($condição_2){
    echo "Condição verdadeira 2<br>";
  }

  if($condição_3){
    echo "Condição verdadeira 3<br>";
  }

  Echo "<br>";
?>

<div class="titulo">Atividade 22</div>

<ul>
  <li>Crie variáveis que recebem idades;</li>
  <li>Cheque se as idades são maiores ou iguais a 18;</li>
  <li>Se sim, imprima uma mensagem que a pessoa é maior de idade;</li>
</ul>

<?php
  $idade_1 = 10;
  $idade_2 = 20;
  $idade_3 = 30;
  $maioridade = 18;

  if($idade_1 >= $maioridade) {
    echo '$idade_1 é maior que 18 anos. <br>';
  }

  if($idade_2 >= $maioridade) {
    echo '$idade_2 é maior que 18 anos. <br>';
  }

  if($idade_3 >= $maioridade) {
    echo '$idade_3 é maior que 18 anos. <br>';
  }