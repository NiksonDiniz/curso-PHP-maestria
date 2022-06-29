<div class="titulo">Atividade 53</div>

<ul>
  <li>Crie uma classe Cachorro;</li>
  <li>Crie o método latir e andar;</li>
  <li>Execute o método em novas instâncias da classe;</li>
</ul>

<?php

  class Cachorro {

    function latir() {
      echo " Auuuuu auuuu <br>";
    }

    function andar() {
      echo "Estou andando <br>";
    }
  }

  $pastorAlemao = new Cachorro;
  $pastorAlemao -> latir();
  $pastorAlemao -> andar();

  $viraLatas = new Cachorro;
  $viraLatas -> latir();
  $viraLatas -> andar();