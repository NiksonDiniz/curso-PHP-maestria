<div class="titulo">Inserindo dados com mysqli</div>

<ul>
  <li>Para inserir dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;</li>
  <li> A instrução para inserir dados é a INSERT INTO;</li>
  <li>Devemos passar a tabela, colunas e valores;</li>
</ul>

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_errno){
    echo "Error na conexão";
    echo "Error: " . $conn->connect_error;
  }

  /* Aula */
/*   $table = "itens";
  $nome = "tesoura";
  $descricao = "tesoura afiada";

  $inser = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";
  $conn->query($inser);
  $conn->close(); */


