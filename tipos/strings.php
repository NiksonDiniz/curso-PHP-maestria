<div class="titulo">Tipo Textos (strings)</div>

<ul>
  <li>Os textos são conhecidos como strings;</li>
  <li>Em PHP podemos escrever textos em aspas simples ou duplas, não há diferença para texto puro;</li>
  <li>As aspas duplas interpretam variáveis;</li>
</ul>

<?php
  echo "Testando texto de aspas duplas <br>";
  echo 'Testando texto de aspas simples <br>';
  echo "Ele disse: 'Olá' <br>"; # Ele disse: 'Olá'

  $idade = 15;

  echo "Ele tem $idade anos <br>";# Ele tem 15 anos
  echo 'Ele tem $idade anos <br>';# Ele tem $idade anos

?>

<h2>Checando se é string</h2>
<ul>
  <li>Podemos utilizar a função is_string() para verificar se um dado é uma string;</li>
  <li>A função recebe um valor como parâmetro;</li>
  <li>Novamente receberemos true or false, dependendo do dado enviado;</li>
  <li>Precisamos utilizar uma estrutura if para validar o valor;</li>
</ul>

<?php
  $str = "Nikson";
  $num = 10;

  if(is_string($str)){
    echo "$str é uma string <br>";
  } else {
    echo "$str não é uma string <br>";
  }

  if(is_string($num)){
    echo "$num é uma string <br>";
  } else {
    echo "$num não é uma string <br>";
  }
