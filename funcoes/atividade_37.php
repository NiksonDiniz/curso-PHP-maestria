<div class="titulo">Atividade 37</div>

<ul>
  <li>Crie uma função chamada defineCorCarro;</li>
  <li>Onde há um parâmetro chamado cor, com valor default de vermelha;</li>
  <li>Retorne a cor do carro;</li>
  <li>Imprima o retorno tanto com parâmetro default, como também definindo a cor;</li>
</ul>

<?php

  function defineCorCarro($cor = 'vermelho'){
    return $cor;
  }

  echo defineCorCarro() . "<br>";
  echo defineCorCarro("Azul") . "<br>";