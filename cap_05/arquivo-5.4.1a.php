<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Sintaxe JSON - Exemplo 1</h1>
<fieldset>
<p><a href="/cap_05/arquivo-5.4.1a.php">Recarregar a página</a></p>

</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="../cap_04/arquivo-4.3a.php">&laquo; anterior</a> | <a href="arquivo-5.4.1b.php">próximo &raquo;</a></div>

<script type="text/javascript">
meuJson = { "notebooks": [
{ "fabricante": "Apple", "modelo": "MacBook MB881BZ/A", "SO": "OS X 10.5"  } ,
{ "fabricante": "CCE", "modelo": "Notebook RLE232", "SO": "Vista Basic"  },    
{ "fabricante": "Positivo", "modelo": "Notebook R27", "SO": "Linux"  }    
]}  

var obj = eval("meuJson");

var mod1 = obj.notebooks[1].modelo;
alert("Modelo da CCE: " + mod1) 

var so0 = obj.notebooks[0].SO;
alert("Sistema Operacional da Apple: " + so0) 
</script>
</div>
</div>
</body>
</html>
