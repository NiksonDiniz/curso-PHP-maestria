<div class="titulo">Retornando múltiplos valores</div>

<ul>
  <li>Caso seja necessário retornar vários valores em uma função, podemos formar um array para retorno;</li>
  <li>E então acessar os índices de forma isolada com a nova variável que
contém o retorno;<br>function teste() {<br>return [“a”, 10, true];<br>}</li>
</ul>

<?php

function alteraDados($nome, $idade) {

  $nome = "Sr, $nome";
  $idade = "$idade anos";

  return [$nome, $idade];
}

$dados = alteraDados("Nikson", 32);

print_r($dados);

echo "<br>";

echo "Olá $dados[0], você tem $dados[1]";



?>

<div class="titulo">Depuração de valores</div>

<ul>
  <li>Utilizamos duas funções para verificar dados formatados:</li>
  <li>print_r e var_dump;</li>
  <li>As duas apresentam os dados de forma semelhante;</li>
  <li>Porém var_dump exibe de uma forma “human readable”, traduzindo seria algo como “para humanos lerem”;</li>
</ul>

<?php

  echo "<br>";
  var_dump($dados);
  echo "<br>";
  print_r($dados);

?>