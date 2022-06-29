<?php

  setcookie("nome", "Bart", time() + 3600);

  if(isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
  }

?>

<h3>Bem vindo <?= $nome; ?></h3>

<div class="titulo">Mantendo o estado</div>

<ul>
  <li>O HTTP é um protocolo que não mantém o estado (stateless);</li>
  <li>Ou seja, após o fim da requisição a conexão entre usuário e servidor é finalizada, a próxima conexão não possui mais relação entre ambos;</li>
  <li>Para conseguir manter estes dados podemos utilizar os cookies;</li>
  <li>O problema desta abordagem é que alguns navegadores não permitem o
uso de cookies ou o bloqueiam;</li>
</ul>

<div class="titulo">Mantendo o estado</div>

<ul>
  <li>Os cookies são strings que contém informações;</li>
  <li>A função para adicionar um cookie é setcookie;</li>
  <li>A função deve ser chamada antes do corpo da página, pois envia dados como header (cabeçalho);</li>
  <li>O cookie leva dados como: nome, valor e data de expiração;</li>
  <li>Podemos acessar os cookies de volta com $_COOKIE;</li>
</ul>