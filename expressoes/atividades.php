<div class="titulo">Atividade 15</div>
<ul>
  <li>Crie uma operação que retorne falso com igualdade;</li>
  <li>Crie uma operação que retorne verdadeiro com igualdade;</li>
</ul>


<?php
  $nome = 'Pedro';
  $sobrenome = 'Pereira';
  $a = 1;
  $b = 1;

  if($nome == $sobrenome){
    echo "true <br>";
  } else {
    echo "false <br>";
  }

  if($a == $b){
    echo "true <br>";
  } else {
    echo "false <br>";
  }

  echo "<br>";

?>

<div class="titulo">Atividade 16</div>
<ul>
  <li>Insira o valor 5 em uma variável, e o valor 3 em outra;</li>
  <li>Teste os operadores de: igualdade, diferença, idêntico e não idêntico;</li>
</ul>

<?php
  $x = 10;
  $k = "10";
  $y = 11.23;
  $z = "tomate";

  if($x == $k){
    echo "true <br>";
  } else {
    echo "false <br>";
  } # true

  if($k === $z){
    echo "true <br>";
  } else {
    echo "false <br>";
  } # false

  if($x != $k){
    echo "true <br>";
  } else {
    echo "false <br>";
  } # false

  if($x !== $z){
    echo "true <br>";
  } else {
    echo "false <br>";
  } # true
