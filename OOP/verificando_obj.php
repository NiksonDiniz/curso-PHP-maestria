<div class="titulo">Verificando classes</div>

<ul>  
  <li>Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos;</li>
  <li>is_object() => verifica se uma variável é um objeto;</li>
  <li>get_class() => verifica a classe de um objeto;</li>
  <li>method_exists() => verifica se um método existe em um objeto;</li>
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

  $bart = new Humano;
  $homer = 'Simpson';

  // verificando as classes
  $checagem1 = is_object($bart); 
  $checagem2 = is_object($homer);

  $resultado1 = $checagem1 ? 'É um objeto' : 'Não é um objeto';
  echo $resultado1 . "<br>";

  $resultado2 = $checagem2 ? 'É um objeto' : 'Não é um objeto';
  echo $resultado2 . "<br>";

  // verificando a classe da variável
  echo get_class($bart) . "<br>"; # Humano

  // verificando métodos
  $checagem3 = method_exists($bart, 'falar'); 

  $resultado3 = $checagem3 ? 'Método existe' : 'Método não existe';
  echo $resultado3 . "<br>";