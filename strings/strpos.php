<div class="titulo">Encontrando a primeira ocorrência</div>

<ul>
  <li>Com a função strpos podemos encontrar algum texto na string;</li>
  <li>Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;</li>
  <li>Se for retornado false, o texto não está na string;</li>
</ul>

<?php

  include_once __DIR__ . "/../error.php";

  $str = "Testando o metodo strpos.";

  $testeEncontrar = strpos($str, "strpos");

  echo "$testeEncontrar <br>";  # 18

  $testeEncontrar2 = strpos($str, "java");

  echo "$testeEncontrar2 <br>"; # não retorna nada - falso
?>

<div class="titulo">Encontrando a última ocorrência</div>

<ul>
  <li>Com a função strrpos podemos encontrar a última ocorrência de um texto na string;</li>
  <li>Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;</li>
  <li>Se for retornado false, o texto não está na string;</li>
</ul>

<?php

  $str2 = "teste Testando o metodo strrpos teste.";

  $palavra = strrpos($str2, "teste");

  echo "$palavra <br>"; # 32

  // pega a palavra
  $p = substr($str2, strpos($str2, "teste"), 5);

  echo "$p <br>";
