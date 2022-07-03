<div class="titulo">Criando e deletando tabelas com mysqli</div>

<ul>
  <li>Para criar e deletar tabelas vamos utilizar as mesmas queries de SQL puro, porém com o auxílio do método query;</li>
  <li>DROP TABLE para deletar tabelas;</li>
  <li>CREATE TABLE para criar tabelas;</li>
  <li> Lembre de fechar a conexão!</li>
</ul>

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  /* Aula */
  // $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
  $q = "DROP TABLE teste";
  $conn->query($q);
  $conn->close();