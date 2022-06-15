<div class="titulo">Parâmetros de função</div>

<ul>
  <li>Os parâmetros de função também são considerados tipos de variáveis;</li>
  <li>Este recurso nos ajuda a criar funções com valores dinâmicos;</li>
  <li>Podendo alterá-los a cada invocação da mesma;</li>
  <li>Podemos passar mais de um parâmetro para uma função;</li>
</ul>

<?php
  function soma($a, $b) {
    echo $a + $b . "<br>";
  }

  soma(2, 10); # 12
  soma(13, 20); # 33