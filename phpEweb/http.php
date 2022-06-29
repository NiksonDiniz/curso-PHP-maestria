<div class="titulo">Introdução ao HTTP</div>

<ul>
  <li>A web roda em cima do protocolo HTTP (HyperText Transfer Protocol);</li>
  <li>Quando um navegador solicita uma página web é feito um request HTTP;</li>
  <li>Esta requisição recebe uma resposta, ambos podem possuir um body;</li>
  <li>A resposta contém um header (cabeçalho), que é constituído pelo método (GET, POST), arquivo/path solicitado (index.php) e versão do protocolo HTTP (HTTP/1.x);</li>
  <li>Basicamente uma requisição é enviada e uma resposta é recebida;</li>
</ul>

<div class="titulo">Métodos HTTP</div>

<ul>
  <li>As requisições que enviamos também contém métodos, alguns deles são:</li>
  <li>GET => Solicita a apresentação de um recurso (ex: visualização de uma página);</li>
  <li>POST => Envio de dados ao servidor (ex: cadastro de usuário);</li>
  <li>PUT => Atualização de dados;</li>
  <li>DELETE => Remoção de dados;</li>
  <li>PATCH => Atualização de dado específico;</li>
</ul>

<div class="titulo">Status HTTP</div>

<ul>
  <li>Após enviarmos a requisição, vamos receber uma resposta que contém um status, que são separados em algumas categorias:</li>
  <li>100 - 199 => Respostas de informação;</li>
  <li>200 - 299 => Respostas de sucesso;</li>
  <li>300 - 399 => Redirecionamento;</li>
  <li>400 - 499 => Erros do cliente (navegador, ex: 404);</li>
  <li>500 - 599 => Erros de servidor (ex: 500);</li>
</ul>