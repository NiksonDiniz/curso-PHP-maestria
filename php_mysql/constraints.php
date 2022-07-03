<div class="titulo">Constraints</div>

<ul>
  <li>Constraints são características que podem ser adicionadas na hora da criação de uma tabela;</li>
  <li>Podemos definir: campos que não podem ser nulos, campos únicos, chaves primárias e mais;</li>
  <li>O comando fica após o tipo da coluna: coluna tipodedado constraint,</li>
</ul>

<div class="titulo">NOT NULL</div>

<ul>
  <li> A NOT NULL é uma constraint;</li>
  <li>Esta constraint não permite que o dado adicionado a esta coluna esteja vazio;</li>
  <li>Exemplo:
      nome VARCHAR(100) NOT NULL</li>
</ul>

<!-- Cria tabela notnull pra teste  -->
CREATE TABLE notnull(
	nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL
);

<!-- Insere um valor na tabela notnull -->
INSERT INTO notnull (nome, idade) VALUES ("Bart", 32);

<!-- Modificando o modo da tabela / dados not null são obrigatórios  -->
SET @@GLOBAL.SQL_MODE = 'STRICT_ALL_TABLES';

<div class="titulo">UNIQUE</div>

<ul>
  <li> A UNIQUE é uma constraint;</li>
  <li> Garante que todos os valores da coluna que foi adicionado sejam únicos;</li>
  <li>Obs: podemos unir várias constraints;</li>
  <li>Exemplo:
      nome VARCHAR(100) UNIQUE
      email VARCHAR(255) NOT NULL UNIQUE;</li>
</ul>

<!-- 
  Cria tabela emailmarketing
  Obs: não pode ter dois emails iguais / campo UNIQUE 
-->
CREATE TABLE emailmarketing (
	email VARCHAR(255) NOT NULL UNIQUE,
    nome VARCHAR(255)
);

<div class="titulo">PRIMARY KEY</div>

<ul>
  <li>A PRIMARY KEY é uma constraint;</li>
  <li>As chaves primárias devem ter valores únicos e não podem ser nulas, geralmente colocadas na coluna de ID;</li>
  <li> Uma tabela só pode ter uma PRIMARY KEY;</li>
  <li>Exemplo:
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY</li>
</ul>

<!-- Criando tabela itens com id de chave primaria -->
CREATE TABLE itens (
  <!-- INT = inteiro UNSIGNED = positivo AUTO_INCREMENT = incrementa automaticamnte -->
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  descricao TEXT
);

<!-- Inserindo valores / obs: o id é colocado automaticamente -->
INSERT INTO itens (nome, descricao) VALUES ("pneu", "pneu redondinho e novinho");
INSERT INTO itens (nome, descricao) VALUES ("banco", "banco de couro novinho");
INSERT INTO itens (nome, descricao) VALUES ("volante", "volante de couro novinho");
