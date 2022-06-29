<?php

  echo $_SERVER['RESQUEST_METHOD'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autoprocessamento de páginas</title>
</head>
<body>

  <div class="titulo">Autoprocessamento de páginas</div>

  <ul>
    <li>Podemos criar uma página que faz o processamento dos dados e também exibe o input de informações;</li>
    <li>Para isso devemos criar um if que checa se o método de requisição ($_SERVER[‘REQUEST_METHOD’]) é GET ou POST;</li>
    <li>Depois criar as duas variações, para cada uma das possibilidades;</li>
    <li>Ou checar se algum parâmetro veio pela requisição e então criar as variações;</li>
  </ul>

  <div>
    <form action="auto.php" method="POST">
      <input type="text" name="nome" placeholder="Seu nome">
      <input type="submit" value="enviar">
    </form>
  </div>
  
</body>
</html>