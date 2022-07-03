<div class="titulo">Deletando dados com prepared</div>

<ul>
  <li>Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;</li>
  <li>Na hora de inserir o WHERE para remover os registros, vamos inserir os prepared statements; </li>
  <li>Sequência: prepare => bind_param => execute;</li>
  <li>Lembrando que DELETE sem WHERE, causa a remoção de todos os registros;</li>
</ul>

<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $id = 10;

  $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $conn->close();