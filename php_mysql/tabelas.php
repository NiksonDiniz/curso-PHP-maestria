<div class="titulo">Criando tabelas</div>

<ul>
  <li>As tabelas ficam dentro dos bancos, e os dados ficam dentro das tabelas, ou seja, é uma parte fundamental do banco relacional;</li>
  <li>Podemos criar tabelas facilmente por SQL,o comando é: <br>
      CREATE TABLE nome (<br>
        coluna tipodedado,<br>
        coluna2 tipodedado<br>
      );</li>
</ul>

  <!-- criando tabela pessoas -->
  exemplo: 
  CREATE TABLE pessoas(
    nome VARCHAR(200),
      idade INT
  );

  <!-- criando tabela carros -->
  exemplo: 
  CREATE TABLE carros(
	marca VARCHAR(100),
    descricao TEXT,
    ano_fabricacao INT
);

<div class="titulo">Removendo tabelas</div>

<ul>
  <li>Há também a possibilidade de remover tabelas do banco;</li>
  <li>Os dados serão removidos para sempre;</li>
  <li>O comando para deletar tabelas é: <br>
      DROP TABLE nome;</li>
</ul>

<!-- apagando tabela  -->
DROP TABLE pessoa;

<div class="titulo">Alterando tabela</div>

<ul>
  <li>Podemos alterar uma tabela já criada, com algumas operações: adicionar coluna, remover coluna, modificar coluna;</li>
  <li>Normalmente o banco não costuma mudar após a sua criação, a operação mais provável é a adição de colunas;</li>
  <li> Comandos de alterar tabelas começam com: <br>
        ALTER TABLE nome <br>
        ADD/DROP COLUMN/MODIFY COLUMN nome</li>
</ul>

<!-- Alterando tabela carros e add coluna motor -->
ALTER TABLE carros
ADD motor INT;

<!-- Deleta coluna ano_fabricacao da tabela  carros-->
ALTER TABLE carros
DROP ano_fabricacao;

<!-- Modificando de TEX para VARCHAR -->
ALTER TABLE carros
MODIFY COLUMN descricao VARCHAR(500);