<div class="titulo">Preenchimento de formulário</div>

<ul>
  <li>Podemos preencher o formulário com dados que vieram da requisição;</li>
  <li>Isso acontece bastante em resultados de busca ou edições de registros;</li>
  <li>Podemos fazer uma checagem de se o dado foi enviado e recebido para a página, e utilizar o echo para exibir no atributo value do input;</li>
  <li>Exemplo: <br>
   <'input type=”text” value=”<'?php echo $nome; ?>”>
  </li>
</ul>

<div class="titulo">Parâmetro com mais de um valor</div>

<ul>
  <li>Os inputs de checkbox podem conter mais de um valor;</li>
  <li>Para receber todos os eles no backend, precisamos adicionar uma sintaxe de array no name;</li>
  <li>Assim receberemos todos os inputs marcados;</li>
  <li>Exemplo: <br>
      name=”caracteristicas[]”
  </li>
</ul>

<?php

  $usuario = [
    'nome' => 'Bart',
    'idade' => 18,
    'profissao' => 'programador'
  ];

  if($usuario) {

    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="">
    <div>
      <input type="text" name="nome" placeholder="Seu nome" value="<?= $nome ;?>">
    </div>
    <div>
      <input type="text" name="idade" placeholder="Sua idade" value="<?= $idade ;?>">
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="tomate">Tomate
      <input type="checkbox" name="ingredientes[]" value="cebola">Cebola
      <input type="checkbox" name="ingredientes[]" value="macarrao">Macarrão
    </div>
    <input type="submit" value="Enviar">
  </form>
  
</body>
</html>