<div class="titulo">Números Decimais (floats)</div>

<ul>
  <li>Os floats são todos os números com casas decimais;</li>
  <li>Como o padrão universal é da língua inglesa, temos a separação de casas com . e não ,</li>
  <li>Exemplos de floats: 2.123, 0.04, -12.8</li>
</ul>

<?php
  $a = 1.12;

  echo "<br>" . $a;
  echo "<br>" . 12.12 + 12.12;
?>

<h2>Checando se é float</h2>

<ul>
  <li>Podemos utilizar a função is_float() para verificar se um dado é um float;</li>
  <li>A função recebe um valor como parâmetro;</li>
  <li>Novamente receberemos true or false, dependendo do dado enviado;</li>
  <li>Precisamos utilizar uma estrutura if para validar o valor;</li>
</ul>

<?php
  $b = "teste";
  $c = 12.8;

  if(is_float($b)){
    echo "É float <br>";
  } else {
    echo "Não é float  <br>";
  }

  if(is_float($c)){
    echo "É float  <br>";
  } else {
    echo "Não é float  <br>";
  }