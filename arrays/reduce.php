<div class="titulo">Reduce em arrays</div>

<ul>
  <li>A função array_reduce tem como objetivo reduzir um array a apenas um valor;</li>
  <li>Podemos passar uma segunda função como parâmetro, para algum processo ser executado;</li>
  <li>array_reduce($arr, $funcao);</li>
</ul>

<?php

 $arr = [1, 2, 5, 8, 10];
 
 function soma($a, $b) {
  return $a + $b;
 }

 $resultado = array_reduce($arr, "soma");

 echo "$resultado <br>";

 function sub($a, $b) {
  return $a - $b;
 }

 $resultado = array_reduce($arr, "sub");

 echo "$resultado <br>";

?>

