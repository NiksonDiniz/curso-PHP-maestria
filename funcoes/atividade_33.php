<div class="titulo">Atividade 33</div>

<ul>
  <li>Crie uma função;</li>
  <li>Ela deve receber um parâmetro de nome e idade;</li>
  <li>Imprima “Olá eu sou o NOME e tenho X anos”;</li>
</ul>

<?php
  function ola($nome, $idade) {
    echo "Olá eu sou o $nome e tenho $idade anos <br>";
  }

  ola('Goku', 30);