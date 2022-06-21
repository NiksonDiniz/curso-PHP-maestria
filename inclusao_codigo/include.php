<div class="titulo">Include</div>

<ul>
  <li>Com o include inserimos um arquivo de PHP, ou até mesmo um HTML, em outro;</li>
  <li>Podendo assim utilizar tudo que está declarado no arquivo incluído;</li>
  <li>O include não gera erro fatal se o arquivo não existir, e sim um warning;</li>
  <li>Exemplo: include “arquivo.ext”</li>
</ul>

<?php
  include "error.php";
  include "teste.php";

  // esta variável está na página teste
  echo $name;
?>