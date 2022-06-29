<div class="titulo">Função date</div>

<ul>
  <li>A função date recebe um parâmetro, que é o formato da data, e este é o primeiro parâmetro da mesma;</li>
  <li>A resposta será a data atual;</li>
  <li>Exemplo: <br> date(“d/m/y”); // day / month / year</li>
</ul>

<?php

  include_once __DIR__ . "/../error.php";

  echo date('d/m/y') . "<br>"; # 29/06/22
  echo date('D, M - Y') . "<br>"; # Wed, Jun - 2022
  echo date('d, M - Y') . "<br>"; # 29, Jun - 2022
  echo date('d/m/Y') . "<br>"; # 29/06/2022
  echo date('l, M - Y') . "<br>"; # Wednesday, Jun - 2022
  echo date('l, F - Y') . "<br>"; # Wednesday, June - 2022
