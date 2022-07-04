<div class="titulo">Atualizando dados com PDO</div>

<ul>
  <li>Para atualizar a abordagem também é parecida;</li>
  <li>Vamo seguir com a sequência: prepare => bind_param => execute</li>
  <li>E então a query persistirá no banco:
      $stmt = $con->prepare(“UPDATE x SET a = ?, b = ? WHERE c = ?”)</li>
</ul>

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  /* Aula */
  // $id = 6;
  // $nome = "borracha";
  // $descricao = "borracha nova que não apaga nada";

  // $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

  // $stmt->bindParam(":id", $id );
  // $stmt->bindParam(":nome", $nome );
  // $stmt->bindParam(":descricao", $descricao );

  // $stmt->execute();
  // $conn->close();

?>

<div class="titulo">Selecionando dados com PDO</div>

<ul>
  <li>Para selecionar dados a abordagem também é parecida com mysqli;</li>
  <li>Vamo seguir com a sequência: prepare => bind_param => execute</li>
  <li>Porém para o resgate dos dados temos dois métodos:</li>
  <li> fetch: recebe apenas a primeira ocorrência;</li>
  <li>fetchAll: recebe todos os dados;</li>
</ul>

<?php

  $id = 5;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  // (PDO::FETCH_ASSOC) - tira a repetição que viria sem o mesmo
  // pega o primeiro
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  print_r($data);

  // (PDO::FETCH_ASSOC) - tira a repetição que viria sem o mesmo
  // pega todos
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($data);