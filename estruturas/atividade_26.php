<div class="titulo">Exercício 26a</div>

<ul>
  <li>Crie uma variável que recebe uma velocidade de um carro;</li>
  <li>Depois crie uma estrutura if que verifica essa velocidade;</li>
  <li>Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;</li>
  <li>Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;</li>
  <li>Se for maior de 40, imprima uma mensagem de multa;</li>
</ul>

<?php
  $velocidade = 100;
  $velocidadePermitida = 40;

  if($velocidade < $velocidadePermitida) {
    echo "Motorista está na velocidade correta. <br>";
  } else if ($velocidade == $velocidadePermitida) {
    echo "Cuidado com o limite de velocidade. <br>";
  } else {
    echo "Motorista multado por excesso de velocidade. <br>";
  }

  echo "<br>";
?>

<div class="titulo">Exercício 26b</div>

<ul>
  <li>Crie uma variável que recebe um peso de uma pessoa;</li>
  <li>E outra que recebe uma altura;</li>
  <li>Calcule o IMC (peso / altura ²)</li>
  <li>Faça 3 checagens;</li>
  <li>Menor que 20 = subpeso;</li>
  <li>20 a 25 = normal;</li>
  <li>Maior que 25 = sobrepeso;</li>
</ul>

<?php
  $peso = 170;
  $altura = 1.72;

  $imc = $peso / ($altura ** 2);

  if($imc < 20) {
    echo "subpeso. <br>";
  } else if( $imc >= 20 && $imc <= 25) {
    echo "normal. <br>";
  } else {
    echo "sobrepeso. <br>";
  }
  