<div class="titulo">AND, OR e NOT</div>

<ul>
  <li>Os operadores AND, OR e NOT são semelhantes aos do PHP e podem auxiliar o WHERE a filtrar mais ainda os dados;</li>
  <li>Podemos utilizar os operadores em conjunto;</li>
  <li>Podemos utilizar o * para selecionar todas as colunas;</li>
  <li> Veja um exemplo:
       WHERE condicao AND condicao2</li>
</ul>

<!-- itens com id igual a 2 OR(ou) igual a 5 -->
SELECT * FROM `itens` WHERE id = 2 OR id = 5;

<!-- itens com nome especifico e id especifico  -->
SELECT * FROM `itens` WHERE nome = "caneta" AND id = 6;
SELECT * FROM `itens` WHERE nome = "caneta" OR id > 5;