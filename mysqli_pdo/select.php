<div class="titulo">Selecionando dados com mysqli</div>

<ul>
  <li>Para resgatar dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;</li>
  <li>A instrução para inserir dados é a SELECT;</li>
  <li>Vamos inserir o método query em uma variável, que é onde receberemos os resultados;</li>
  <li>Com o método fetch_assoc, transformamos os resultados em um array;</li>
</ul>

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_errno){
    echo "Error de conexão! <br>";
    echo "Error: " . $conn->connect_error;
  }

  /* Aula */
  # seleciona todos os itens
  $q = "SELECT * FROM itens";
  
  $result = $conn->query($q);

  $conn->close();

  // um resultado
  $item = $result->fetch_assoc();
  # Array ( [id] => 1 [nome] => pneu [descricao] => pneu redondinho e novinho )

  // todos os resultados / pega tudo
  $itens = $result->fetch_all();
  # Array ( [id] => 1 [nome] => pneu [descricao] ...

  print_r($itens);