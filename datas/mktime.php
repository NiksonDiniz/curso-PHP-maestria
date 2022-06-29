<div class="titulo">Função mktime</div>

<ul> 
  <li>A função mktime recebe em seus parâmetros: hora, minuto, segundo, mês, dia e ano;</li>
  <li>Assim podemos criar uma data a partir desta informação;</li>
  <li>Exemplo: <br>
    $date = mktime(01,18,00,03,12,2000); <br> 
    echo date(‘d/m/y’, $date);</li>
</ul>

<?php

  $dataNascimento = mktime(02, 12, 33, 03, 14, 1990);

  echo "$dataNascimento <br>"; # 637391553

  $dataFormatada = date('d/m/Y', $dataNascimento);

  echo $dataFormatada . "<br>"; # 14/03/1990


  // data futura
  $dataEspecifica = mktime(10, 20, 11, 04, 28, 2044);
  $dataEspecificaFormatada = date('m/d/Y', $dataEspecifica);

  echo $dataEspecificaFormatada . "<br>"; # 04/28/2044