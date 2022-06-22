<div class="titulo">Descobrindo argumentos</div>

<ul>
  <li>No PHP temos duas funções interessantes para aprender mais sobre funções;</li>
  <li>func_get_arg = retorna uma lista com os argumentos de uma função;</li>
  <li>func_num_args = retorna o número de argumentos de uma função;</li>
</ul>

<?php

  function soma($a, $b, $c) {
    print_r(func_get_args());
    echo "<br>";
    echo func_num_args() . "<br>";

    return $a + $b + $c;
  }

  soma(1, 2, 3);