<div class="titulo">Atividade 42</div>

<ul>
  <li>Na frase “Cadê o meu queijo? Ele estava aqui em cima”</li>
  <li>Resgate as palavras queijo e estava;</li>
</ul>

<?php

    $frase = "Cadê o meu queijo? Ele estava aqui em cima";

    $palavra1 = substr($frase, 12, 6);
    $palavra2 = substr($frase, 24, 6);

    echo $palavra1 . "<br>";
    echo $palavra2 . "<br>";
?>