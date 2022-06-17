<div class="titulo">Operadores de conversão (cast)</div>

<ul>
  <li>Com os operadores de conversão podemos forçar uma variável ser de um determinado tipo;</li>
  <li>Nem todos são úteis, os mais utilizados são para converter uma string em número;</li>
  <li>Operadores: int, bool, float, string, array, object e unset;</li>
  <li>Exemplo: $a = (float) “5.34243” # string é convertida para float</li>
</ul>

<?php
  $a = (int) "12";
  var_dump($a); # int(12)
  echo "<br>";

  $b = (float) "12.23";
  var_dump($b); # float(12.23)
  echo "<br>";

  $c = (string) 40;
  var_dump($c); # string("40")
  echo "<br>";
  echo "<br>";
?>

<div class="titulo">Atividade 19</div>

<ul>
  <li>Converta os seguintes dados para int com o operador de cast;</li>
  <li>“testando”</li>
  <li>12.9</li>
  <li>true</li>
  <li>[1, 2, 3]</li>
  <li>E veja os resultados</li>
</ul>

<?php
  $d = (int) "testando";
  var_dump($d); # int(0)
  echo "<br>";

  $e = (int) 12.9;
  var_dump($e); # int(12)
  echo "<br>";

  $f = (int) true;
  var_dump($f); # int(1)
  echo "<br>";

  $g = (int) [1, 2, 3];
  var_dump($g); # int(1)
  echo "<br>";