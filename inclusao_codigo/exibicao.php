<div class="titulo">Exibição de conteúdo</div>

<ul>
  <li>Com uma técnica semelhante ao short tags, podemos exibir conteúdo sem o echo;</li>
  <li>Ótima estratégia para resumir as chamadas PHP apenas para exibição de valores;</li>
  <li>Ex: <'?= "teste"; ?></li>
</ul>

<?php
  $nome = "Bob Esponja";
?>

<form action="">
  <div>
    <input type="text" value="<?= $nome; ?>">
  </div>
  <div>
    <input type="submit" value="Enviar">
  </div>
</form>