<div class="titulo">String para array</div>

<ul>
  <li>Podemos converter uma string em array com a função explode;</li>
  <li>Passamos primeiro o separador como argumento;</li>
  <li>Depois a string que vai ser convertida;</li>
</ul>

<?php

  // com o implode retornamos com o separador
  $array = array('lastname', 'email', 'phone');
  $comma_separated = implode(",", $array);
  
  print $comma_separated; // lastname,email,phone
  echo "<br>";

  // com o explode
  $frase = "Testando o explode";

  $fraseArray = explode(" ", $frase);

  print_r($fraseArray); # retorna array = Array ( [0] => Testando [1] => o [2] => explode )
