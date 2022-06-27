<div class="titulo">Atividade 40</div>

<ul>
  <li>Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;</li>
  <li>imprima o número de letras “a” desta string;</li>
</ul>

<?php
  $str = "O rato roeu a roupa do rei de Roma";
  $countA = 0;

  for($i = 0; $i < strlen($str); $i++) {
    if($str[$i] === "a"){
      $countA++;
    }
  }

  echo "A string \$str possuí $countA letras a. <br>";
