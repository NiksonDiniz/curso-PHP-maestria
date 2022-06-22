<div class="titulo">Atividade 31</div>

<ul>
  <li>Crie um array com strings;</li>
  <li>Utilize a função implode no array;</li>
  <li>Primeiro argumento: “,”</li>
  <li>Segundo argumento: o seu array</li>
  <li>Atribua a invocação da função a uma variável</li>
  <li>Exiba o resultado</li>
</ul>

<?php

  $arr = ['Café', 'Pão', 'Leite', 'Açúcar'];

  
  function separar($separador, $array) {
    $resultado = implode($separador, $array);

    return $resultado;
  }

  $array_separado = separar(", ", $arr);

  echo $array_separado; // Café, Pão, Leite, Açúcar
?>

