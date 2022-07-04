<div class="titulo">Habilitando a PDO</div>

<ul>
  <li>Antes de começar a de fato utilizar a PDO, é necessário checar se a lib está habilitada;</li>
  <li>Vamos checar no php.ini por duas linhas, e descomentar caso estejam:
    php_pdo
    php_pdo_mysql</li>
</ul>

<div class="titulo">Conexão com PDO</div>

<ul>
  <li> A conexão com PDO é um pouco diferente do mysqli, mas vamos informar basicamente os mesmos parâmetros;</li>
  <li>Que são: banco de dados, host, nome do banco, usuário e senha;</li>
  <li>Exemplo:
      $conn = new PDO(“mysql:host=localhost;dbname=teste”, $user, $pass); </li>
</ul>

<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);