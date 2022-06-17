<div class="titulo">Operador idêntico a</div>

<ul>
  <li>Com o operador idêntico a verificamos se um valor é igual ao outro, avaliando o seu tipo também;</li>
  <li>O símbolo é: ===</li>
  <li>Exemplo: 5 === 5 # true</li>
  <li>Exemplo: 3 === “3” # false</li>
</ul>

<?php
  if(5 == "5") {
    echo "5 é igual 5 <br>";
  }

  if(5 === "5") {
    echo "número 5 é igual string 5! <br>";
  } else {
    echo "número 5 não é igual string 5! <br>";
  }

?>

<div class="titulo">Operador de diferença</div>

<ul>
  <li>Com o operador de diferença verificamos se um valor é diferente de outro;</li>
  <li>O símbolo é: !=</li>
  <li>Exemplo: 5 != 5 # false</li>
  <li>Exemplo: 10 != 5 # true</li>
</ul>

<div class="titulo">Operador não idêntico a</div>

<ul>
  <li>Com o operador não idêntico a verificamos se um valor é diferente de outro, avaliando o seu tipo também;</li>
  <li>O símbolo é: !==</li>
  <li>Exemplo: 5 !== 4 # false</li>
  <li>Exemplo: 3 !== “3” # true</li>
</ul>

<div class="titulo">Operador maior e maior ou igual</div>

<ul>
  <li>Com o operador maior que verificamos se um valor é maior que outro;</li>
  <li>O símbolo é: ></li>
  <li>Exemplo: 5 > 4 # true</li>
  <li>Com o operador maior ou igual a verificamos se um valor é maior ou igual a outro;</li>
  <li>O símbolo é: >=</li>
  <li>Exemplo: 5 >= 5 # true</li>
</ul>

<div class="titulo">Operador menor e menor ou igual</div>

<ul>
  <li>Com o operador menor que verificamos se um valor é menor que outro;</li>
  <li>O símbolo é: <</li>
  <li>Exemplo: 5 < 4 # false</li>
  <li>Com o operador menor ou igual a verificamos se um valor é menor ou igual a outro;</li>
  <li>O símbolo é: <=</li>
  <li>Exemplo: 11 <= 12 # true</li>
</ul>