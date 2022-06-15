<div class="titulo">Números Inteiros(integers)</div>

<ul>
  <li>Os inteiros são os números inteiros da matemática, como: 1, 2, 15;</li>
  <li>Incluindo os números negativos;</li>
  <li>Os números positivos não precisam de um sinal de + na frente;</li>
  <li>Já os números negativos devem ser descritos assim, ex: -12;</li>
</ul>


<?php
  echo "<br>" . 5;
  echo "<br>" . 6;
  echo "<br>" . 6 + 5;
  echo "<br>" . -6 + 5;
?>

<h2>Checando número inteiro</h2>

<ul>
  <li>Podemos validar se um dado é inteiro com a função is_int();</li>
  <li>Caso um número seja inteiro, será retornado true ( um outro tipo de dado);</li>
  <li>Caso não seja, receberemos um retorno de false ( tipo de dado também );</li>
  <li>Precisamos utilizar uma estrutura if para validar o valor;</li>
</ul>

<?php
  // $a = 5;
  $a = "string";

  if(is_int($a)){
    echo "é um número inteiro";
  } else {
    echo " não é um inteiro";
  }