<div class="titulo">O que é DAO</div>

<ul>
  <li>DAO = Data Access Object;</li>
  <li>Padrão de código utilizado para persistência de dados;</li>
  <li>Utilizada apenas em abordagens orientadas a objetos;</li>
  <li>Há uma classe DAO que será responsável pelas interações ao DB;</li>
  <li>Atua como um intermediário de aplicação e banco de dados;</li>
  <li>Separa a regra de negócio da interação com o banco de dados;</li>
  <li>Possibilita também a troca de bancos ou modelo de conexão facilmente;</li>
</ul>

<div class="titulo">DAO na teoria</div>

<ul>
  <li>Trabalharemos com duas classes;</li>
  <li>Exemplificando com uma classe de usuário:</li>
  <li>UserDAO: Manipulação de dados do banco;</li>
  <li> User: Todas as ações que não envolvem o banco;</li>
  <li>Create: User monta um novo usuário com seus campos necessários do banco, UserDAO recebe este objeto e insere o usuário no banco;</li>
</ul>