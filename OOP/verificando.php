<div class="titulo">Verificando classes</div>

<ul>  
  <li>Em PHP temos alguns métodos que nos ajudam a entender as classes;</li>
  <li>class_exists() => verifica se uma classe existe;</li>
  <li>get_class_methods() => verifica os métodos de uma classe;</li>
  <li>get_class_vars() => mapeamento das propriedades de uma classe;</li>
</ul>

<?php

  class Humano {
    public $nome;
    public $idade;
    public $profissao;

    public function falar(){
      echo "Bom dia! <br>";
    }
  }


  // verificando as classes
  $checagem1 = class_exists('Humano'); 
  $checagem2 = class_exists('Animal');

  $resultado1 = $checagem1 ? 'Classe existe' : 'Classe não existe';
  echo $resultado1 . "<br>";

  $resultado2 = $checagem2 ? 'Classe existe' : 'Classe não existe';
  echo $resultado2 . "<br>";

  // verificando as variáveis
  print_r(get_class_vars('Humano')); # Array ( [nome] => [idade] => [profissao] => )
  echo "<br>";

  // verificando métodos
  print_r(get_class_methods('Humano')); # Array ( [0] => falar )
  echo "<br>";