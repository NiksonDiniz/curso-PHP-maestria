<div class="titulo">Tamanho da string</div>

<ul>
  <li>Podemos percorrer cada um dos caracteres de uma string;</li>
  <li>Para isso vamos utilizar uma estrutura de repetição;</li>
  <li>E o método strlen, para saber o número de caracteres;</li>
  <li>Com isso podemos iterar pela string completa;<br>for($x = 0; $x < strlen($str); $i++) {<br>// codigo <br>}</li>
</ul>

<?php
  $filme = "O Poderoso Chefão";

  for($i = 0; $i < strlen($filme); $i++){
    echo $filme[$i] . "<br>";
  }

?>