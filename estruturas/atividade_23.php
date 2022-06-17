<div class="titulo">Exercício 23</div>

<ul>
  <li>Complemente o exercício 22;</li>
  <li>Insira um else com uma mensagem para as pessoas que são menores de idade;</li>
</ul>

<?php
  $idade_1 = 10;
  $idade_2 = 20;
  $idade_3 = 30;
  $maioridade = 18;

  if($idade_1 >= $maioridade) {
    echo '$idade_1 é maior que 18 anos. <br>';
  } else {
    echo '$idade_1 não é maior que 18 anos. <br>';
  }

  if($idade_2 >= $maioridade) {
    echo '$idade_2 é maior que 18 anos. <br>';
  } else {
    echo '$idade_2 não é maior que 18 anos. <br>';
  }

  if($idade_3 >= $maioridade) {
    echo '$idade_3 é maior que 18 anos. <br>';
  } else {
    echo '$idade_3 não é maior que 18 anos. <br>';
  }

  echo "<br>";
?>


<div class="titulo">Exercício 24a</div>

<ul>
  <li>Crie algumas variáveis com tipos de dados diferentes: string, int e boolean, por exemplo;</li>
  <li>Cheque se a variável é um inteiro;</li>
  <li>Caso sim, apresente uma mensagem confirmando o tipo de dado;</li>
  <li>Caso não, apresente outra mensagem;</li>
</ul>

<?php
  $nome = "Pedro";
  $idade = 30;
  $maiorDeIdade = true;

  if(is_int($nome)){
    echo '$nome é um inteiro. <br>';
  } else {
    echo '$nome não é um inteiro. <br>';
  }

  if(is_int($idade)){
    echo '$idade é um inteiro. <br>';
  } else {
    echo '$idade não é um inteiro. <br>';
  }

  if(is_int($maiorDeIdade)) {
    echo '$maiorDeIdade é um inteiro. <br>';
  } else {
    echo '$maiorDeIdade não é um inteiro. <br>';
  }

  echo "<br>";
?>

<div class="titulo">Exercício 24b</div>

<ul>
  <li>Crie uma variável que recebe um peso;</li>
  <li>Caso seja maior que 80, imprima a mensagem que está pesado demais;</li>
  <li>Se não, prima “Peso dentro do limite”;</li>
</ul>

<?php
  $peso = 300;
  $pesoLimite = 80;

  if($peso > $pesoLimite){
    echo "Está pesado demais. <br>";
  } else {
    echo "Peso dentro do limite. <br>";
  }