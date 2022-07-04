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
<!--         <div class="modulo verde">
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
            <li><a href="exercicio.php?dir=variaveis&file=declarando_variaveis">Declarando Variáveis</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=atividade_08">Atividade 08</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=atividade_09">Atividade 09</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=variavel">Variável de variável</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=variavel_referencia">Variável por Referência</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=escopo">Escopo</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=escopo_local">Variável Local</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=escopo_global">Variável Global</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=estatica">Variável Estática</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=parametros">Parâmetros de função</a></li>
          </ul>
        </div>
        <div class="modulo roxo">
          <h3>Módulo 05</h3>
          <ul>
            <li><a href="exercicio.php?dir=expressoes&file=expressoes_codigo">Expressões de código</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=operadores">Operadores e +</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividade_10">Atividade 10</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=mudanca_implicita">Mudança de tipo Implícito</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividade_11">Atividade 11</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividade_12">Atividade 12</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=operador_modulo">Operador de módulo</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividade_13">Atividade 13</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=op_exponenciacao">exponenciação | concatenação</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividade_14">Atividade 14</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=mais_operadores">Mais Operadores</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividades">Atividade 15 e 16</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=operadores_logicos">Operadores Lógicos</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividade_17">Atividade 17 e 18</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=operadore_cast">Op. Cast e atividade 19</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=operador_atribuicao">Op. de atribuição | ternário</a></li>
            <li><a href="exercicio.php?dir=expressoes&file=atividade_20">Atividade 20</a></li>
          </ul>
        </div>
        <div class="modulo laranja">
          <h3>Módulo 06</h3>
          <ul>
            <li><a href="exercicio.php?dir=estruturas&file=if">Est. If e Else</a></li>
            <li><a href="exercicio.php?dir=estruturas&file=atividade_21">Atividade 21 e 22</a></li>
            <li><a href="exercicio.php?dir=estruturas&file=atividade_23">Atividade 23 e 24</a></li>
            <li><a href="exercicio.php?dir=estruturas&file=if_aninhado">IF aninhado</a></li>
            <li><a href="exercicio.php?dir=estruturas&file=atividade_25">Atividade 25</a></li>
            <li><a href="exercicio.php?dir=estruturas&file=else_if">Else if</a></li>
            <li><a href="exercicio.php?dir=estruturas&file=atividade_26">Atividade 26</a></li>
            <li><a href="exercicio.php?dir=estruturas&file=switch">Switch</a></li>
          </ul>
        </div>
        <div class="modulo verde-escuro">
          <h3>Módulo 07</h3>
          <ul>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=while">While</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=atividade_27">Atividade 27</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=break">Conhecendo o break e continue</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=atividade_28">Atividade 28</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=loop_aninhado">Loop aninhado</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=atividade_29">Atividade 29</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=do_while">Do while</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=for">Estrutura for</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=atividade_30">Atividade 30</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=infinito">Loop Infinito</a></li>
            <li><a href="exercicio.php?dir=estrutura_repeticao&file=foreach">Foreach</a></li>
          </ul>
        </div>
        <div class="modulo verde">
          <h3>Módulo 08</h3>
          <ul>
            <li><a href="exercicio.php?dir=inclusao_codigo&file=include">Include</a></li>
            <li><a href="exercicio.php?dir=inclusao_codigo&file=require">Require</a></li>
            <li><a href="exercicio.php?dir=inclusao_codigo&file=once">Include/Require Once</a></li>
            <li><a href="exercicio.php?dir=inclusao_codigo&file=short">Short tags</a></li>
            <li><a href="exercicio.php?dir=inclusao_codigo&file=exibicao">Exibição de conteúdo</a></li>
            <li><a href="exercicio.php?dir=inclusao_codigo&file=php_html">Inserindo PHP ao HTML</a></li>
          </ul>
        </div>
        <div class="modulo vermelho">
          <h3>Módulo 09</h3>
          <ul>
            <li><a href="exercicio.php?dir=funcoes&file=funcao">Funções</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_31">Atividade 31</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_32">Atividade 32</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=parametro">Parâmetro</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_33">Atividade 33</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_34">Atividade 34</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=retorno">Retorno de função</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_35">Atividade 35</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=escopo">Escopo em funções</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_36">Atividade 36</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=default">Parâmetros default</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_37">Atividade 37</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=argumentos">Descobrindo argumentos</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=atividade_38">Atividade 38</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=retorno_varios">Retorno múltiplos valores</a></li>
          </ul>
        </div>
        <div class="modulo azul">
          <h3>Módulo 10</h3>
          <ul>
            <li><a href="exercicio.php?dir=strings&file=interpolacao">Interpolação de variáveis</a></li>
            <li><a href="exercicio.php?dir=strings&file=escape">Valores de escape</a></li>
            <li><a href="exercicio.php?dir=strings&file=atividade_39">Atividade 39</a></li>
            <li><a href="exercicio.php?dir=strings&file=print">Função Print e printf</a></li>
            <li><a href="exercicio.php?dir=strings&file=comprimento">Comprimento da string</a></li>
            <li><a href="exercicio.php?dir=strings&file=percorrendo">Percorrendo uma string</a></li>
            <li><a href="exercicio.php?dir=strings&file=atividade_40">Atividade 40</a></li>
            <li><a href="exercicio.php?dir=strings&file=limpando">Limpando strings(espaços)</a></li>
            <li><a href="exercicio.php?dir=strings&file=case">Alterando o Case</a></li>
            <li><a href="exercicio.php?dir=strings&file=atividade_41">Atividade 41</a></li>
            <li><a href="exercicio.php?dir=strings&file=remover">Removendo tags HTML</a></li>
            <li><a href="exercicio.php?dir=strings&file=substr">Função substr</a></li>
            <li><a href="exercicio.php?dir=strings&file=atividade_42">Atividade 42</a></li>
            <li><a href="exercicio.php?dir=strings&file=reversa">String reversa</a></li>
            <li><a href="exercicio.php?dir=strings&file=repeticao">Repetição de String</a></li>
            <li><a href="exercicio.php?dir=strings&file=explode">String p array (explode)</a></li>
            <li><a href="exercicio.php?dir=strings&file=atividade_43">Atividade 43</a></li>
            <li><a href="exercicio.php?dir=strings&file=implode">Array para string(implode)</a></li>
            <li><a href="exercicio.php?dir=strings&file=atividade_44">Atividade 44</a></li>
            <li><a href="exercicio.php?dir=strings&file=strpos">Encontra - Strpos / Strrpos</a></li>
            <li><a href="exercicio.php?dir=strings&file=strstr">Retorna resto da string</a></li>
            <li><a href="exercicio.php?dir=strings&file=url">Decompor URL</a></li>
          </ul>
        </div>
        <div class="modulo roxo">
          <h3>Módulo 11</h3>
          <ul>
            <li><a href="exercicio.php?dir=arrays&file=array">Array</a></li>
            <li><a href="exercicio.php?dir=arrays&file=atividade_45">Atividade 45</a></li>
            <li><a href="exercicio.php?dir=arrays&file=count">Número de elementos - count()</a></li>
            <li><a href="exercicio.php?dir=arrays&file=matriz">Matriz</a></li>
            <li><a href="exercicio.php?dir=arrays&file=atividade_46">Atividade 46</a></li>
            <li><a href="exercicio.php?dir=arrays&file=list">List()</a></li>
            <li><a href="exercicio.php?dir=arrays&file=atividade_47">Atividade 47</a></li>
            <li><a href="exercicio.php?dir=arrays&file=slice">Cortar array - array_slice</a></li>
            <li><a href="exercicio.php?dir=arrays&file=chunk">Dividir array - array_chunk</a></li>
            <li><a href="exercicio.php?dir=arrays&file=chaves">Chaves e Valores</a></li>
            <li><a href="exercicio.php?dir=arrays&file=splice">Removendo elementos</a></li>
            <li><a href="exercicio.php?dir=arrays&file=atividade_48">Atividade 48</a></li>
            <li><a href="exercicio.php?dir=arrays&file=extract">Extract - array associativo</a></li>
            <li><a href="exercicio.php?dir=arrays&file=compact">Compact</a></li>
            <li><a href="exercicio.php?dir=arrays&file=atividade_49">Atividade 49</a></li>
            <li><a href="exercicio.php?dir=arrays&file=foreach">Foreach e arrays</a></li>
            <li><a href="exercicio.php?dir=arrays&file=atividade_50">Atividade 50</a></li>
            <li><a href="exercicio.php?dir=arrays&file=reduce">Reduce em arrays</a></li>
            <li><a href="exercicio.php?dir=arrays&file=inarray">in_array | sort | arsort | ksort</a></li>
            <li><a href="exercicio.php?dir=arrays&file=atividade_51">Atividade 51</a></li>
            <li><a href="exercicio.php?dir=arrays&file=reverse">Invertendo arrays - reverse</a></li>
            <li><a href="exercicio.php?dir=arrays&file=shuffle">Arrays aleatório - shuffle</a></li>
            <li><a href="exercicio.php?dir=arrays&file=sum">Somando Arrays - array_sum</a></li>
            <li><a href="exercicio.php?dir=arrays&file=merge">Unindo Arrays - array_merge</a></li>
            <li><a href="exercicio.php?dir=arrays&file=diff">Diferença Arrays - array_diff</a></li>
          </ul>
        </div>
        <div class="modulo laranja">
          <h3>Módulo 12</h3>
          <ul>
            <li><a href="exercicio.php?dir=OOP&file=objetos">O que são Objetos?</a></li>
            <li><a href="exercicio.php?dir=OOP&file=classes">O que são classes?</a></li>
            <li><a href="exercicio.php?dir=OOP&file=instan">Instanciando objetos</a></li>
            <li><a href="exercicio.php?dir=OOP&file=atividade_52">Atividade 52</a></li>
            <li><a href="exercicio.php?dir=OOP&file=metodos">Declarando métodos</a></li>
            <li><a href="exercicio.php?dir=OOP&file=atividade_53">Atividade 53</a></li>
            <li><a href="exercicio.php?dir=OOP&file=propriedades">Declarando propriedades</a></li>
            <li><a href="exercicio.php?dir=OOP&file=atividade_54">Atividade 54</a></li>
            <li><a href="exercicio.php?dir=OOP&file=this">Conhecedo o this</a></li>
            <li><a href="exercicio.php?dir=OOP&file=atividade_55">Atividade 55</a></li>
            <li><a href="exercicio.php?dir=OOP&file=constantes">Constantes em classes</a></li>
            <li><a href="exercicio.php?dir=OOP&file=visibilidade">Visibilidade</a></li>
            <li><a href="exercicio.php?dir=OOP&file=heranca">Herança</a></li>
            <li><a href="exercicio.php?dir=OOP&file=atividade_56">Atividade 56</a></li>
            <li><a href="exercicio.php?dir=OOP&file=ancestralidade">Ancestralidade</a></li>
            <li><a href="exercicio.php?dir=OOP&file=interface">Interface</a></li>
            <li><a href="exercicio.php?dir=OOP&file=traits">Traits</a></li>
            <li><a href="exercicio.php?dir=OOP&file=abstratas">Classes abstratas</a></li>
            <li><a href="exercicio.php?dir=OOP&file=construtor">Construtores</a></li>
            <li><a href="exercicio.php?dir=OOP&file=atividade_57">Atividade 57</a></li>
            <li><a href="exercicio.php?dir=OOP&file=anonimas">Classes anônimas</a></li>
            <li><a href="exercicio.php?dir=OOP&file=verificando">Verificando classes</a></li>
            <li><a href="exercicio.php?dir=OOP&file=verificando_obj">Verificando objetos</a></li>
          </ul>
        </div>
        <div class="modulo verde-escuro">
          <h3>Módulo 13</h3>
          <ul>
            <li><a href="exercicio.php?dir=datas&file=date">Função date</a></li>
            <li><a href="exercicio.php?dir=datas&file=strtotime">Função strtotime</a></li>
            <li><a href="exercicio.php?dir=datas&file=mktime">Função mktime</a></li>
            <li><a href="exercicio.php?dir=datas&file=datetime">Obejto DateTime</a></li>
            <li><a href="exercicio.php?dir=datas&file=format">format e modify</a></li>
            <li><a href="exercicio.php?dir=datas&file=setDate">setDate e setTime</a></li>
            <li><a href="exercicio.php?dir=datas&file=diff">Diff</a></li>
            <li><a href="exercicio.php?dir=datas&file=comparando">Comparando datas</a></li>
            <li><a href="exercicio.php?dir=datas&file=fuso">Alterar fuso</a></li>
          </ul>
        </div> -->
        <div class="modulo vermelho-escuro">
          <h3>Módulo 14</h3>
          <ul>
            <li><a href="exercicio.php?dir=phpEweb&file=http">Introdução HTTP</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=variaveis">Variáveis globais do PHP</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=server">Explorando $_SERVER</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=teoria_for">Processamento de Formulários</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=get">Formulários com GET</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=post">Formulários com POST</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=auto">Autoprocessamento de pag</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=form">Preenchimento de form</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=upload">Upload de arquivos</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=validacao">Validação de form</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=mantendo">Cookies</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=sessions">Sessions</a></li>
            <li><a href="exercicio.php?dir=phpEweb&file=ssl">SSL</a></li>
          </ul>
        </div>
        <div class="modulo azul-escuro">
          <h3>Módulo 15A</h3>
          <ul>
            <li><a href="exercicio.php?dir=php_mysql&file=intro">PHP e Banco de Dados</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=bd">Criando BD</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=tipos">Tipos de dados</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=tabelas">Tabelas</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=constraints">Constraints</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=insert">Inserindo dados</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=select">Selecionando dados</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=condicionais">Condicionais</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=orderby">Ordenando Resultados</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=update">Atualizando dados</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=delete">Deletando dados</a></li>
            <li><a href="exercicio.php?dir=php_mysql&file=usuario">Criando usuário</a></li>
          </ul>
        </div>
        <div class="modulo azul-escuro">
          <h3>Módulo 15B</h3>
          <ul>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=intro">mysqli x PDO</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=mysqli">Conectando com mysqli</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=query">Executando uma query</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=tabelas">tabelas com mysqli</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=insert">Inserindo dados com mysqli</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=select">Selecionando dados com mysqli</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=teoria">Prepared statements teoria</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=deletando">Deletando dados com prepared</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=pdo">Habilitando a PDO</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=insert_pdo">Inserindo dados com PDO</a></li>
            <li><a href="exercicio.php?dir=mysqli_pdo&file=update_pdo">Atualizando dados com PDO</a></li>
          </ul>
        </div>

      </nav>
    </div>
  </main>

  <footer class="rodape">
    CURSO PHP ®
    <?= date('Y'); ?>.
  </footer>

</body>

</html>