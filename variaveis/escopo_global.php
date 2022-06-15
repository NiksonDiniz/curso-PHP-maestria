<div class="titulo">Variável Global</div>

<ul>
  <li>A principal característica da variável global é ser declarada fora de funções;</li>
  <li>Por comportamento padrão não são acessíveis dentro de funções;</li>
  <li>Precisamos utilizar a palavra global para isso;</li>
  <li>Essa função da variável global não ser acessível dentro de funções, previne muitos problemas no software;</li>
</ul>

<?php
  $teste = 'abc';

  echo "$teste antes do if <br>";

  if(true){
    $teste = 'cba';

    echo "$teste dentro do if <br>";
  }

  echo "$teste após o if <br>";

  function func() {
    // a variável não existe
    echo "$teste dentro da func<br>";
  }

  func(); # dentro do if

  // usando a variável global
  function func1() {
    global $teste;
    $teste = 10;
    echo "$teste dentro da func1 <br>";
  }

  func1(); # 10