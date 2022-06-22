<div class="titulo">Atividade 38</div>

<ul>
  <li>Crie uma função que recebe um array de itens de supermercado;</li>
  <li>Retorne este array em forma de string, separado em vírgulas;</li>
</ul>

<?php

include_once __DIR__ . "/../error.php"; 

  $produtos = ['café', 'arroz', 'feijão', 'macarrão', 'carne'];

  // function separar($separador,$array) {
  //   $resultado = implode($separador, $array);

  //   return $resultado;
  // }

  // echo separar(", ", $produtos);
  // echo "<br>";
  // echo separar("<br>", $produtos);

  // resposta do professor  
  function listaParaString($arr) {
    $str = "Você levou estes itens do mercado: ";
    
    for($i = 0; $i < count($arr); $i++) {
      // echo count($arr);
      // echo $i . "<br>";
      if($i + 1  == count($arr)) {
        $str .= "$arr[$i].";
      } else {
        $str .= "$arr[$i], ";
      }
    }

    return $str;
  }

echo listaParaString($produtos);