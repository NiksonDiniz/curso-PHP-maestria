<?php

  session_start();

  // print_r($_SESSION);
  $_SESSION['nome'] = 'Bart';
  $nome = 'Bart';

?>

<h3>Bem vindo , <?= $nome; ?></h3>

<div class="titulo">Sobre as sessions</div>

<ul>
  <li>Com session podemos criar uma variável que persiste em diferentes páginas e também perdura por várias visitas ao mesmo site;</li>
  <li>A session utiliza recursos de cookies para seu funcionamento, e se o recurso estiver desabilitado propaga a sessão via URL;</li>
  <li>Sessions são utilizadas para: autenticação, carrinho de compras e tudo o que precisa persistir de página em página;</li>
  <li>Acaba sendo o recurso mais utilizado, comparando o com o cookie;</li>
</ul>

<div class="titulo">Onde são salvas as sessions?</div>

<ul>
  <li>As sessions são salvas em arquivos no computador que estamos ou no servidor da aplicação;</li>
  <li>O caminho para onde os arquivos são salvos fica em php.ini na configuração session.save_path;</li>
  <li>As sessions podem ser salvas em dois formatos: o próprio do PHP e também o Web Distributed Data eXchange (WDDX)</li>
</ul>

<div class="titulo">Iniciando com sessions</div>

<ul>
  <li>Para iniciar a utilizar session precisamos utilizar a função session_start;</li>
  <li>Esta função vai carregar os dados existentes e também permitir salvar novos dados;</li>
  <li>Todas as variáveis salvas em session ficam em $_SESSION;</li>
  <li>Podemos salvar utilizando uma chave e valor, como em arrays;</li>
  <li>Para deletar todos os dados da session utilizamos session_destroy;</li>
</ul>