<div class="titulo">ORDER BY</div>

<ul>
  <li>Com o ORDER BY é possível ordenar o retorno com base em alguma coluna;</li>
  <li>Podemos ordenar de forma crescente (ASC) ou descendente (DESC);</li>
  <li>Exemplo:
      ORDER BY email ASC;</li>
</ul>

<!-- Ordenando pelo id -->
SELECT * FROM `itens` ORDER BY id;

<!-- Ordenando pelo id decrescente-->
SELECT * FROM `itens` ORDER BY id DESC;

<!-- Ordenando pelo nome de forma crescente-->
SELECT * FROM `itens` WHERE id > 2 ORDER BY nome;