<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Curso PHP</title>
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice dos exercícios</h2>
  </header>

  <main class="principal">
    <div class="conteudo">
      <nav class="modulos">
        <div class="modulo verde">
          <h3>Módulo 01 e 02</h3>
          <ul>
            <li><a href="exercicio.php?dir=basico&file=atividade_01">Atividade 01</a></li>
            <li><a href="exercicio.php?dir=basico&file=info">Função phpinfo()</a></li>
            <li><a href="exercicio.php?dir=basico&file=case_sensitivity">Case sensitivity</a></li>
            <li><a href="exercicio.php?dir=basico&file=instrucoes">Instruções de Código</a></li>
            <li><a href="exercicio.php?dir=basico&file=espaco_branco">Espaço em Branco</a></li>
            <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
            <li><a href="exercicio.php?dir=basico&file=atividade_02">Atividade 02</a></li>
            <li><a href="exercicio.php?dir=basico&file=palavras_reservadas">Palavras Reservadas</a></li>
          </ul>
        </div>
        <div class="modulo vermelho">
          <h3>Módulo 03</h3>
          <ul>
          <li><a href="exercicio.php?dir=tipos&file=numeros_inteiros">Números Inteiros</a></li>
          <li><a href="exercicio.php?dir=tipos&file=atividade_03">Atividade 03</a></li>
          <li><a href="exercicio.php?dir=tipos&file=numeros_decimais">Números Decimais(floats)</a></li>
          <li><a href="exercicio.php?dir=tipos&file=atividade_04">Atividade 04</a></li>
          <li><a href="exercicio.php?dir=tipos&file=strings">Tipo String</a></li>
          <li><a href="exercicio.php?dir=tipos&file=atividade_05">Atividade 05</a></li>
          <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleanos</a></li>
          <li><a href="exercicio.php?dir=tipos&file=array">Arrays</a></li>
          <li><a href="exercicio.php?dir=tipos&file=atividade_06">Atividade 06</a></li>
          <li><a href="exercicio.php?dir=tipos&file=atividade_07">Atividade 07</a></li>
          <li><a href="exercicio.php?dir=tipos&file=objetos">Objetos</a></li>
          <li><a href="exercicio.php?dir=tipos&file=null">Tipo Null</a></li>
          </ul>
        </div>
        <div class="modulo azul">
          <h3>Módulo 04</h3>
          <ul>
            <li><a href="#">Vazio</a></li>
            <li><a href="#">Vazio</a></li>
            <li><a href="#">Vazio</a></li>
            <li><a href="#">Vazio</a></li>
          </ul>
        </div>
      
      </nav>
    </div>
  </main>

  <footer class="rodape">
    CURSO PHP ® <?= date('Y'); ?>.
  </footer>

</body>

</html>