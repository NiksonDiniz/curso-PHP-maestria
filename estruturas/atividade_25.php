<div class="titulo">Atividade 25</div>

<ul>
  <li>Crie variáveis com números e outras com string;</li>
  <li>Faça um if checando se é um número;</li>
  <li>Caso for, atribua a multiplicação deste número por 2 em outra variável;</li>
  <li>E crie um outro if, que checa se o novo número é maior que 100;</li>
  <li>Se sim, imprima uma mensagem;</li>
</ul>

<?php
  /* A função is_numeric() é uma função embutida no PHP que é usada para verificar se uma variável passada na função como um parâmetro é um número ou uma string numérica ou não. A função retorna um valor booleano. */
  $num_1 = 60;
  $num_2 = 20;
  $num_3 = 30;

  $nome_1 = "Scooby";
  $nome_2 = "Salsicha";
  $nome_3 = "Fredy";

  if(is_numeric($num_1)){
    $num_1 *= 2;

    if($num_1 > 100) {
      echo "A variável \$num_1 ficou com valor $num_1!<br>";
    } else {
      echo "A variável \$num_1 não é maior que 100!<br>";
    }
  }

  echo "<br>";

  if(is_numeric($nome_1)){
    $nome_1 *= 2;

    if($nome_1 > 100) {
      echo "A variável \$nome_1 ficou com valor $nome_1!<br>";
    }

  } else {
    echo "Não é um número! <br>";
  }