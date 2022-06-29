<div class="titulo">Upload de arquivos</div>

<ul>
  <li>Para enviar arquivos ao servidor vamos precisar mudar o enctype do formulário para: multipart/form-data;</li>
  <li>Também será necessário um input de tipo file;</li>
  <li>O tamanho do arquivo pode exaurir a memória do servidor;</li>
  <li>Depois do envio, todos os dados da imagem estarão em $_FILES;</li>
</ul>

<?php

  if(isset($_FILES)) {

    print_r($_FILES);

  }

?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <div>
    <input type="file" name="imagem">
  </div>
  <input type="submit" value="Enviar">
</form>