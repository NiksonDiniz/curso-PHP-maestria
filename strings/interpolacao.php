<div class="titulo">Interpolação de variaveis</div>

<ul>
  <li>Podemos interpolar variáveis em strings de duas formas;</li>
  <li>Utilizando aspas duplas e colocando a variável e também com chaves e o nome da variável;</li>
  <li>Não há diferença em ambas as formas;<br>“Interpolando a variável $teste”<br>“Interpolando a variável {$teste}”</li>
</ul>

<?php

// O ideal é manter um padrão, usar somente uma sintaxe
   $nome = "Nikson";
   $idade = 32;
   $profissao = "Programador";

   echo "Eu sou o $nome, tenho $idade anos e atuo como $profissao <br>";
   echo "Eu sou o {$nome}, tenho {$idade} anos e atuo como {$profissao} <br>";