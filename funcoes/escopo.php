<div class="titulo">Relembrando escopo e funções</div>

<ul>
  <li>Nas funções temos um escopo específico chamado de local, onde as suas variáveis são exclusivamente delas;</li>
  <li>Podemos utilizar as variáveis globais com a instrução global;</li>
  <li>E também há o static, onde podemos manter um valor após a execução de uma função, o que normalmente é resetado;</li>
</ul>

<?php
  $a = 10;
  $b = 15;

  function testeEscopo(){
    $a = 5;
    global $b;
    static $c = 0;
    
    $a++;
    $b++;
    $c++;

    echo "Escopo local de A: $a <br>";
    echo "Escopo global na função de B: $b <br>";
    echo "Escopo static de C: $c <br>";

  }

  echo "Escopo global de A: $a <br>";
  echo "Escopo global de B: $b <br>";

  testeEscopo();

  echo "Escopo global de B: $b <br><br>";

  // repare que  a $c aqui fica como 2 e $a fica como 6 nas duas invocações
  // o static mantém o valor anterior, enquanto o $a reseta
  testeEscopo();

  /* 
    Escopo local de A: 6
    Escopo global na função de B: 17
    Escopo static de C: 2
 */
?>