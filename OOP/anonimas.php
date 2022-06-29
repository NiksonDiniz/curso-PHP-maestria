<div class="titulo">Classes anônimas</div>

<ul>  
  <li>As classes anônimas são criadas em uma variável e não possuem nome;</li>
  <li>Elas funcionam como qualquer outra classe;</li>
  <li>Precisamos fechar ela com “;”</li>
  <li>Exemplo: <br>$anonima = new class() { };</li>
</ul>

<?php

  $pessoa = new class(){
    public $nome = 'Bart';

    public function dizerNome() {
      echo " Olá, meu nome é $this->nome <br>";
    }

  };

  echo $pessoa->nome ."<br>";

  $pessoa->dizerNome();