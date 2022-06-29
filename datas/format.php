<div class="titulo">Métodos format e modify</div>

<ul> 
  <li>Os métodos format e modify são da classe DateTime e nos ajudam a manipular os dados nestes objetos;</li>
  <li>format => Formata a data;</li>
  <li>modify => Altera a data;</li>
</ul>


<?php

  // data atual
  $data = new DateTime();

  echo $data->format('d/m/y') . "<br>"; # 29/06/22

  echo $data->format('D - F - Y') . "<br>"; # Wed - June - 2022

  echo $data->format('l, F - Y') . "<br>"; # Wednesday, June - 2022

  // data + 5 dias
  $data->modify('+5 days');

  echo $data->format('d/m/y') . "<br>"; # 04/07/22

    // data - 5 dias
    $data->modify('-15 days');

    echo $data->format('d/m/y') . "<br>"; # 19/06/22