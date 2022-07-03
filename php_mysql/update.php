<div class="titulo">Atualizando dados</div>

<ul>
  <li>Para atualizar dados em uma tabela vamos utilizar a instrução UPDATE;</li>
  <li>Precisamos determinar a tabela, colunas e valores;</li>
  <li>Obs: Um UPDATE sem WHERE vai atualizar todos os dados da tabela;</li>
  <li>Exemplo:
      UPDATE tabela
      SET coluna1 = valor1
      WHERE condicao;</li>
</ul>

<!-- atualizei o nome do café -->
UPDATE itens SET nome = "café quentinho" WHERE id = 4;

<!-- atualizei o nome do café e sua descrição -->
UPDATE itens SET nome = "café", descricao = "café da hora" WHERE id=4;