<div class="titulo">Atividade 17</div>
<ul>
  <li>Verifique as seguintes operações com AND;</li>
  <li>15 > 5 AND “João” === “João”</li>
  <li>“teste” > 5 AND 1</li>
  <li>2 == 3 AND 5 >= 3</li>
</ul>

<?php
// temos true apenas quando as duas comparações são verdadeiras
  $caso_1 = 15 > 5 && "João" === "João";
  $caso_2 = "teste" > 5 && 1;
  $caso_3 = 2 == 3 && 5 >= 3;

  if($caso_1){
    echo "Caso 01 é true <br>";
  } else {
    echo "Caso 01 é false <br>";
  }

  if($caso_2){
    echo "Caso 02 é true <br>";
  } else {
    echo "Caso 02 é false <br>";
  }

  if($caso_3){
    echo "Caso 03 é true <br>";
  } else {
    echo "Caso 03 é false <br>";
  }

  echo "<br>";
?>

<div class="titulo">Atividade 18</div>
<ul>
  <li>Verifique as seguintes operações com OR;</li>
  <li>12 < 5 OR “João” === “João”</li>
  <li>1 > 5 OR 1</li>
  <li>20 === “20” AND 51 >= 31</li>
</ul>

<?php
// só resulta em falso caso os dois lados sejam falsos;
  $caso_4 = 12 < 5 || "João" === "João";
  $caso_5 = 1 > 5 || 1;
  $caso_6 = 20 === "20" || 51 >= 31;

  if($caso_4){
    echo "Caso 04 é true <br>";
  } else {
    echo "Caso 04 é false <br>";
  } # true

  if($caso_5){
    echo "Caso 05 é true <br>";
  } else {
    echo "Caso 05 é false <br>";
  } # true

  if($caso_6){
    echo "Caso 06 é true <br>";
  } else {
    echo "Caso 06 é false <br>";
  } # true
    