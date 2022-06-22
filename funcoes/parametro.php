<div class="titulo">Função com parâmetro</div>

<ul>
  <li>Podemos passar parâmetros para a função;</li>
  <li>Estes parâmetros são como variáveis, que são utilizados dentro da função para moldar a sua execução;</li>
  <li>Não há número máximo de parâmetros;</li>
  <li>function teste(param, param2) {<br> // codigo<br>}</li>
</ul>

<?php

  function velocidadeMaxima($vel) {

    echo "O carro atinge a velocidade máxima de $vel km/h <br>";

  }

  velocidadeMaxima(100);
  velocidadeMaxima(200);

  // não se pode executar funções que exigem parâmetro sem parâmetro
  // velocidadeMaxima() # error sem parâmetro

  $velocidade = 125;

  velocidadeMaxima($velocidade);

  // PHP ignora parâmetro desnecessário
  velocidadeMaxima(250, "teste");

  // Mais parâmetros
  function descreverAnimal($nome, $raca) {

    echo "O $nome é de raça $raca <br>";

  }

  // os argumentos devem ser inseridos na ordem certa
  descreverAnimal("Bob", "vira lata");