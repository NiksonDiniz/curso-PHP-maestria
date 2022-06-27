<div class="titulo">Atividade 41</div>

<ul>
  <li>Transforme a string “este item está em promoção”;</li>
  <li>Em “Este item está em PROMOÇÃO”;</li>
  <li>Obs: você pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, só com funções;</li>
</ul>

<?php

  $primeiraParte = "este item está em ";
  $segundaParte = "promoção";

  echo ucfirst($primeiraParte) . strtoupper($segundaParte);