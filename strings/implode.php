<div class="titulo">Array para string</div>

<ul>
  <li>Podemos converter um array em string com a função implode;</li>
  <li>Passamos primeiro o separador como argumento;</li>
  <li>Depois a string que vai ser convertida;</li>
</ul>

<?php

  $arr = ['banana', 'maçã', 'melão', 'laranja', 'uva'];

  echo implode(" - ", $arr) . "<br>"; # banana - maçã - melão - laranja - uva
  echo implode(" * ", $arr) . "<br>"; # banana * maçã * melão * laranja * uva

?>