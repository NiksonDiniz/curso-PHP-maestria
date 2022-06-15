<div class="titulo">Tipo Booleanos</div>

<ul>
  <li>O boolean é um tipo de dado que só possui dois valores:</li>
  <li>True - verdadeiro;</li>
  <li>False - falso;</li>
  <li>Alguns valores são considerados como falsos: 0, 0.0, “0”, [ ], NULL;</li>
</ul>

<?php
  echo true; // 1
  echo "<br>";
  echo false; // não imprime nada

  if(true){
    echo 'É verdadeiro! <br>';
  }

  if(5 > 2){
    echo 'É verdadeiro! <br>';
  }
?>

<h2>Checando se é booleano</h2>

<ul>
  <li>Podemos utilizar a função is_boolean() para verificar se um dado é um boolean;</li>
  <li>A função recebe um valor como parâmetro;</li>
  <li>Novamente receberemos true or false, dependendo do dado enviado;</li>
  <li>Precisamos utilizar uma estrutura if para validar o valor;</li>
</ul>

<?php
  $a = true;

  if(is_bool($a)){
    echo "É um booleano 1 <br>";# É um booleano 1
  }

  if(is_bool(0)){
    echo "É um booleano 2 <br>"; # não imprime nada
  }

  if(is_bool(false)){
    echo "É um booleano 3 <br>"; # É um booleano 3
  }

  if(is_bool(0.0 == false)){
    echo "0 é considerado falso <br>"; # 0 é considerado falso
  }