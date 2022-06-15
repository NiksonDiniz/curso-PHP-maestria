<div class="titulo">Atividade 04</div>

<ul>
  <li>Crie um arquivo PHP;</li>
  <li>Imprima três floats;</li>
  <li>Utilize a função is_float em um deles;</li>
</ul>

<?php
  $a = 12.3;
  $b = 13.3;
  $c = 20.3;

  echo "<br>" . $a;
  echo "<br>" . $b;
  echo "<br>" . $c;

  echo "<br>";

  echo "\$a = 12.3 <br>";

  if(is_float($a)){
    echo " A variável \$a é float.";
  }