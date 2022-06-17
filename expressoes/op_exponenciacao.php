<div class="titulo">Operador de exponenciação</div>

<ul>
  <li>Podemos realizar o cálculo de potência com o símbolo **;</li>
  <li>Exemplo: 5 ** 2;</li>
  <li>Desta maneira teremos o resultado de 5 elevado a 2;</li>
</ul>

<?php
  $a = 5;
  $b = 2;
  $c = $a ** $b;

  echo "Resultado de $a elevado a $b é $c <br><br>";

?>

<div class="titulo">Operador de concatenação</div>

<ul>
  <li>Em PHP podemos concatenar valores com . (ponto)</li>
  <li>Concatenar é o ato de juntar vários textos e/ou números em apenas uma string;</li>
  <li>Não há limites de quantas expressões podem ser concatenadas;</li>
</ul>

<?php
  $nome = 'Pedro';
  $sobrenome = 'Pereira';

  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto;