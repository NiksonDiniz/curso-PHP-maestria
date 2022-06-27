<div class="titulo">Removendo tags HTML</div>

<ul>
  <li>Podemos remover as tags de HTML de uma string com a função strip_tags;</li>
  <li>Geralmente para salvar dados no banco removemos as tags;</li>
</ul>

<?php
  $textoHTML = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

  echo $textoHTML;

  $salvarTextoBanco = strip_tags($textoHTML);

  echo $salvarTextoBanco;
?>