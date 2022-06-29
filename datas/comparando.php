<div class="titulo">Comparação de datas</div>

<ul> 
  <li>Datas que foram criadas com o objeto de DateTime podem ser comparadas utilizando os operadores de comparação;</li>
  <li>Operadores como: >, < ou ==</li>
  <li>Exemplo: <br>
      $dataA > $dataB;
  </li>
</ul>

<?php

  $data1 = new DateTime();
  $data2 = new DateTime();
  $data3 = new DateTime();
  $data4 = new DateTime();

  $data1->setDate(2010, 03, 15);
  $data2->setDate(2000, 03, 15);

  echo $data1->format('d/m/Y'). "<br>";
  echo $data2->format('d/m/Y'). "<br>";

  $checando = $data1 > $data2 ? 'Data 1 maior' : 'Data 1 menor';

  echo $checando . "<br>";

  // para verificar se é igual
  // tem que ser exatamente igual data e time
  $data3->setDate(2000, 03, 15);
  $data4->setDate(2000, 03, 15);

  $data3->setTime(01, 03, 15);
  $data4->setTime(01, 03, 15);

  $checando1 = $data3 == $data4 ? 'Data é exatamente igual' : 'Data não é igual';
  echo $checando1 . "<br>";