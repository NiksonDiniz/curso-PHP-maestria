<div class="titulo">Inserindo dados com PDO</div>

<ul>
  <li>Em PDO vamos utilizar uma abordagem parecida com o mysqli;</li>
  <li>Utilizaremos o método prepare para realizar a query com prepared statements;</li>
  <li>Depois bind_param para estabelecer os valores dos parâmetros;</li>
  <li>Por fim execute fará a execução da query;
      $stmt = $con->prepare(“INSERT INTO x(a, b) VALUES(?, ?)”);</li>
</ul>

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  /* Aula */

  $nome = "Pedra";
  $descricao = "Pedra boa para tacar na cabeça de pessoas";

  $stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (:nome, :descricao)");

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);
  
  $stmt->execute();

