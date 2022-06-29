<div class="titulo">Objeto DateTime</div>

<ul> 
  <li>O objeto DateTime permite tratar a data como um objeto;</li>
  <li>Podemos passar um parâmetro que será a data criada, se não passarmos nada a data será a atual;</li>
  <li>Podemos exibir as informações do objeto com print_r;</li>
  <li>Exemplo: <br>
      $dataAtual = new DateTime();
  </li>
</ul>

<?php

  $data = new DateTime();

  print_r($data);
  echo "<br>";