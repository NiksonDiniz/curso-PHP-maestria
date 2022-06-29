<div class="titulo">Validação de formulários</div>

<ul>
  <li>A validação é uma parte importante do recebimento de dados;</li>
  <li>Devemos checar se os dados enviados condizem com o que estamos esperando;</li>
  <li>Para isso podemos criar condicionais fazendo as verificações;</li>
  <li>Caso alguma não atenda ou um campo obrigatório esteja vazio, retornamos uma mensagem ao usuário;</li>
  <li>Obs: é possível fazer validações com HTML e também JavaScript;</li>
</ul>

<?php
  $validacoes = [];

  if(count($_POST) > 0){

    if($_POST['nome'] === ""){
      $validacoes[] = 'Por favor, informe nome do usuário!';
    }

    if($_POST['email'] === ""){
      $validacoes[] = 'Por favor, informe email do usuário!';
    }

    if($_POST['senha'] != $_POST['confirmacao']) {
      $validacoes[] = 'As senha devem ser iguais!';
    }
  }

?>

<div>
  <?php if(count($validacoes)) : ?>
    <ul>
      <?php foreach($validacoes as $validacao) : ?>
        <li><?= $validacao; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  
  <form action="validacao.php" method="POST">
    <div>
      <input type="text" name="nome" placeholder="nome">
    </div>
    <div>
      <input type="email" name="email" placeholder="email">
    </div>
    <div>
      <input type="password" name="senha" placeholder="senha">
    </div>
    <div>
      <input type="password" name="confirmacao" placeholder="Confirma senha">
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</div>