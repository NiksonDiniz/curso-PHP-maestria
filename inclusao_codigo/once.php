<div class="titulo">include_once require_once</div>

<ul>
  <li>Os dois funcionam da mesma maneira que require e include;</li>
  <li>Porém impedem que o mesmo arquivo seja adicionado mais de uma vez na página;</li>
  <li>Este pode ser o método mais indicado quando estamos montando templates com PHP;</li>
</ul>

<?php
  include __DIR__ . "/../error.php";

  // vai colocar o mesmo arquivo duas vezes
  // include "teste.php";
  // include "teste.php";

  // com o include_once require_once
  include_once "teste.php";
  include_once "teste.php";

  // include_once require_once um não sobrescreve o outro
  require_once "teste.php";