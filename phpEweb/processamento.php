
<?php
  // funciona na forma sem formatação

 /*
  # utilizar para aula de GET
  print_r($_GET);
  # Array ( [nome] => Bart )

  // verifica a existência
  if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
  } else {
    $nome = "UserRandom";
    $idade = "0";
  }
*/


  // utilizar para aula de POST
  print_r($_POST);

  // pego os valores
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];

?>

<h1>O seu nome é <?= $nome; ?>  e sua idade <?= $idade; ?> </h1>


