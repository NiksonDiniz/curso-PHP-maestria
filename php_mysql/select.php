<div class="titulo">Selecionando dados</div>

<ul>
  <li>Para selecionar dados vamos utilizar a instrução SELECT;</li>
  <li>Devemos determinar a tabela e as colunas que serão selecionadas;</li>
  <li>Podemos utilizar o * para selecionar todas as colunas;</li>
  <li> Exemplo:
        SELECT * FROM tabela;</li>
</ul>

<!-- Tabela itens bd cursophp / lendo tudo de itens-->
SELECT * FROM itens;

<!-- Pega somente nomes da tabela itens -->
SELECT nome FROM itens;

<div class="titulo">Selecionando dados WHERE</div>

<ul>
  <li>O WHERE é uma cláusula utilizada para filtrar registros;</li>
  <li>Vamos poder resgatar os dados que batem apenas com as características que estamos procurando;</li>
  <li>Exemplo:
      SELECT colunas
      FROM tabela
      WHERE condição;</li>
</ul>

<!-- Tabela itens bd cursophp / filtrando a busca para pneu-->
SELECT * FROM `itens` WHERE nome = "pneu";

<!-- Tabela itens bd cursophp / filtrando a busca para id maior que 3-->
SELECT * FROM `itens` WHERE id > 3 ;
