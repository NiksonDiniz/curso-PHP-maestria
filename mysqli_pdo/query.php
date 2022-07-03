<div class="titulo">Executando uma query</div>

<ul>
  <li>Para executar uma query vamos usar o método query;</li>
  <li>Ele deve ser utilizado a partir do objeto que fez a conexão;</li>
  <li>Vamos receber um determinado retorno como resultado, que podem ser os dados, caso seja um SELECT, por exemplo;</li>
  <li>É importante ao fim de todas as queries fechar a conexão, com o método close;</li>
  <li>Conexões abertas gastam recursos do servidor e prejudicam a aplicação;</li>
</ul>

<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_errno){
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error;
  }

  /* Exemplos */
  $sql = "SELECT * FROM itens";
  $result = $conn->query($sql);

  print_r($result);
  # mysqli_result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 7 [type] => 0 )

  $conn->close();

?>