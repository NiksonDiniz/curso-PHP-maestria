<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste de formulários com GET</title>
</head>
<body>
  <div class="titulo">Teste de formulários com POST</div>

  <ul>
    <li>Vamos precisar criar um formulário e definir o método como POST, e também o arquivo ou rota que vamos acessar em action;</li>
    <li>No lado do servidor vamos acessar a variável $_POST que contém os parâmetros enviados para o servidor;</li>
    <li>Faremos o processamento e retornamos algo para o usuário;</li>
  </ul>

  <div>
    <h2>Fromulário</h2>
    <form action="processamento.php" method="POST">
      <input type="text" name="nome" placeholder="Seu nome">
      <input type="number" name="idade" placeholder="Sua idade">
      <input type="submit" value="Enviar">
    </form>
  </div>
</body>
</html>