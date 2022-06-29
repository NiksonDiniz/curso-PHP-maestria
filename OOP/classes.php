<div class="titulo">O que são classes?</div>

<ul>
  <li>Classes são os “pais” dos objetos;</li>
  <li>Em PHP sempre que vamos criar ou instanciar um objeto vamos precisar de uma classe;</li>
  <li>A classe contém o molde do objeto, ou seja, seus métodos e suas propriedades;</li>
  <li>Podemos mudar o valor para cada objeto criado, mas ele parte do que a classe impõe;</li>
</ul>

<div class="titulo">Declarando uma classe</div>

<ul>
  <li>Para iniciar uma classe vamos precisar da palavra reservada class, e também dar um nome para a classe;</li>
  <li>Por convenção, a inicial do nome é sempre em maiúscula, ex: User;</li>
  <li>Como é um bloco de código, a classe é envolvida por { };</li>
  <li>Exemplo: <br>class User {<br>}</li>
</ul>

<?php

  class User {
    // propriedades
    // métodos
  }

  class Person {}
  class Fruta {}
?>