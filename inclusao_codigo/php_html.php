<div class="titulo">Inserindo PHP ao HTML</div>

<ul>
  <li>Como abordado nas seções iniciais, esta é uma das principais funcionalidades PHP;</li>
  <li>Podemos inserir código dinâmico entre nossas tags;</li>
  <li>As extensões para este tipo de arquivo podem ser de .php ou .phtml;</li>
  <li>Ex: <'h1><'?= $titulo ?><'/h1></li>
</ul>

<?php
  include_once "backend.php";
?>

<h3>Seja bem-vindo ao nosso site exemplo</h3>
<p><?= $nome; ?>, Veja nossas ofertas</p>

<h4>Nossos Produtos</h4>
<ul>
  <?php foreach($produtos as $produto): ?>
    <li><?= $produto; ?></li>
  <?php endforeach; ?>
</ul>