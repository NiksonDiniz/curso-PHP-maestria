<div class="titulo">Espaço em branco</div>

<ul>
  <li>Para interpretação do código em PHP o espaço em branco é ignorado;</li>
  <li>Isso acontece pois o mesmo é removido antes da execução;</li>
  <li>A quebra de linha também é ignorada;</li>
  <li>Porém se utilizada de má forma pode gerar erros inesperados no código;</li>
</ul>

<?php
  echo                    "testando espaço em branco <br>";
  echo "testando espaço em branco <br>"                 ;
  echo 
  "quebra de linha <br>"
  ;
  echo 
  "quebra de
  linha <br>"
  ;