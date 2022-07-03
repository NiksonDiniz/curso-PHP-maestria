<div class="titulo">Prepared statements teoria</div>

<ul>
  <li>Prepared statements é quando criamos uma query com placeholders em vez dos valores reais;</li>
  <li>Aumentando a segurança e a performance da requisição;</li>
  <li>Neste caso o fluxo muda um pouco, vamos utilizar o método prepare para preparar a query;</li>
  <li>O bind_param para resgatar os parâmetros, e o execute para rodar a query;</li>
</ul>

<div class="titulo">Inserindo dados com prepared</div>

<ul>
  <li>Para inserir dados com prepared statements vamos seguir a ideia da aula anterior;</li>
  <li>prepare => bind_param => execute;</li>
  <li>Como teremos uma variável para guardar estes três passos, também devemos fechar a conexão desta variável;</li>
  <li>Ela é comumente chamada de statement; (declaração)</li>
  <li>Lembre-se de fechar a conexão;</li>
</ul>

<?php
/*   $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_errno){
    echo "Erro de conexão!";
    echo "Error: " . $conn->connect_error;
  }

  // Aula 
  $nome = "Suporte de microfone";
  $descricao = "Novinho em folha";

  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (? ,? )");

  # s = string, i = integer, d = double;
  $stmt->bind_param("ss", $nome, $descricao);

  $stmt->execute();

  $conn->close(); */

?>

<div class="titulo">Selecionando dados com prepared</div>

<ul>
  <li>Para selecionar dados com prepared statements devemos resgatar os dados com o método fetch_all;</li>
  <li>A sequência será: prepare => bind_param => execute => get_result => fetch_all;</li>
  <li> E depois devemos fechar a conexão;</li>
</ul>

<?php
/*   $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Aula
  $id = 8;


  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();

  // para pegar o resultado
  $result = $stmt->get_result();

  $data = $result->fetch_all();

  print_r($data); */
?>

<div class="titulo">Resgatando apenas uma linha</div>

<ul>
  <li>Para os selects que precisamos de apenas um dado retornado, podemos utilizar o fetch_row;</li>
  <li>Este método pode ser inserido depois de obter o resultado, ou seja, após o get_result;</li>
</ul>

<?php
/*   $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_errno) {
    echo "Error de conexão! <br>";
    echo "Error: " . $conn->connect_error;
  }

  // inserindo dados
    $stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $descricao);
    $stmt->execute();
    $conn->close();

  // busca dados - todos

    $id = 9;
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $data = $result->fetch_all();
    print_r($data);

  // busca uma linha
  $id = 1;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();

  $result = $stmt->get_result();
  $item = $result->fetch_row();

  print_r($item);

  $conn->close(); */

?>

<div class="titulo">Atualizando dados com prepared</div>

<ul>
  <li>Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;</li>
  <li>Na hora de inserir o SET para atualizar os campos, vamos inserir os prepared statements;</li>
  <li>Sequência: prepare => bind_param => execute;</li>
</ul>


<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Aula
  $id = 9;
   
  $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

  $nome = "sofá";
  $descricao = "sofá para doação";

  $stmt->bind_param("ssi", $nome, $descricao, $id);

  $stmt->execute();

  if($stmt->error) {
    echo "Error: " . $stmt->error;
  }

