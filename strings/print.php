<div class="titulo">Função print</div>

<ul>
  <li>A função print tem a funcionalidade semelhante de echo;</li>
  <li>Pode imprimir uma string que foi passada como argumento;</li>
  <li>Exemplo: <br> print("testando")</li>
</ul>

<?php

  print("Imprimindo algo com print <br>");

  $carro = "Fusca";

  print("Aquele carro é da marca $carro <br>");
?>

<div class="titulo">Função printf</div>

<ul>
  <li>A função printf tem a funcionalidade semelhante a print;</li>
  <li>Porém podemos imprimir valores de forma dinâmica utilizando o símbolo %;</li>
  <li>Exemplo: <br> print(“Número %d”, 1);</li>
</ul>

<?php

  $nome = "Nikson";

  // %s -> string
  printf("O nome é %s. <br>", $nome);

  // %d -> int
  $n = 10;

  printf("O número é %d e o outro é %d. <br>", $n, 150);

  // %f -> float
  printf("A temperatura atual é %f. <br>", 12.58);

    // %f -> float - limitando as casa após a virgula
    printf("A temperatura atual é %.2f. <br>", 12.58);


?>