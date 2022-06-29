<div class="titulo">Função strtotime</div>

<ul> 
  <li>Recebe uma string como parâmetro, que é um texto sinalizando tempo;</li>
  <li>A função tenta interpretar e transformar em data;</li>
  <li>Veja um exemplo de utilização: <br> echo date(‘d/m/y’, strtotime(‘+2 years’)); // 2 anos a mais</li>
</ul>

<?php

  /*
    A Era UNIX ou Posix Time ou Unix epoch ou Unix Timestamp teve início no dia a 1 de janeiro de 1970. O nome se deve ao fato de esta data, dia 1 de janeiro de 1970 às 00:00:00 do Tempo Universal Coordenado no calendário gregoriano proléptico, ser o marco zero do sistema de calendário usado pelo sistema operacional UNIX.
  */

  $cincoDias = strtotime("5 days");
  $doisMeses = strtotime("2 months");
  $doisAnos = strtotime("2 years");

  echo " $doisAnos <br>"; # 1719670018 - tempo - unix timestamp 

  echo date('d/m/Y', strtotime('1 years')) . "<br>"; # 29/06/2022
  echo date('d/m/Y', $cincoDias) . "<br>"; # 04/07/2022
  echo date('d/m/Y', $doisAnos) . "<br>"; # 29/06/2024
  echo date('d/m/Y', $doisMeses) . "<br>"; # 29/08/2022