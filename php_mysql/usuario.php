<div class="titulo">Criando usuários</div>

<ul>
  <li>Podemos criar usuários no banco, depois utilizá-los para conectar e realizar as queries;</li>
  <li>Além de criar precisamos adicionar os privilégios;</li>
  <li>Exemplo:
      CREATE USER ‘usuario’@’localhost’ IDENTIFIED BY ‘senha’;
      GRANT ALL PRIVILEGES ON * . * TO ‘usuario’@’localhost’;
      FLUSH PRIVILEGES;</li>
</ul>

<!-- Verifica usuário -->
SELECT * FROM mysql.user;

<!-- Exemplo -->
<!-- Cria o user -->
CREATE USER 'nikson'@'localhost' IDENTIFIED BY 'teste123';
<!-- configura os privilégios -->
GRANT ALL PRIVILEGES ON *.* TO 'nikson'@'localhost';
FLUSH PRIVILEGES;