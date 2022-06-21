<div class="titulo">Require</div>

<ul>
  <li>Com o require inserimos um arquivo de PHP, ou até mesmo um HTML, em outro;</li>
  <li>Podendo assim utilizar tudo que está declarado no arquivo incluído;</li>
  <li>O require gera erro fatal se o arquivo não existir, parando o script;</li>
  <li>Exemplo: require “arquivo.ext”</li>
</ul>

<?php
  // voltando pasta
  include __DIR__ . "/../error.php";

  include "test.php"; # warning

  require "test.php"; # fatal error
?>