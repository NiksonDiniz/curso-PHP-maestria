<div class="titulo">Conectando com mysqli</div>

<ul>
  <li>Para conectar ao MySQL com o mysqli é muito simples, precisamos utilizar a função mysqli_connect;</li>
  <li>Passar os parâmetros de: host, usuário, senha e banco de dados;</li>
  <li>Com a conexão feita podemos utilizar as queries;</li>
  <li>Exemplo:
      $conn = new mysqli(“host”, “user”, “pass”, “db”);</li>
</ul>

<?php
  include_once __DIR__ . "/../error.php";

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);
?>

<div class="titulo">Checando a conexão</div>

<ul>
  <li>Para verificar se houve algum erro na conexão podemos utilizar a propriedade connect_errno;</li>
  <li>E para verificar o erro podemos utilizar o método connect_error()</li>
  <li>Podemos inserir a checagem em um if e mostrar a mensagem de erro com um echo, por exemplo;</li>
</ul>

<?php
  if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro" . mysqli_connect_error();
    /* Ou em OO */
    echo "Erro" . $conn->connect_error;
  }

?>