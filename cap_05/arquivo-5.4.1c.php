<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Sintaxe JSON - Exemplo 3 </h1>
<fieldset>
<p id="insere"></p>

</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-5.4.1b.php">&laquo; anterior</a> | <a href="arquivo-5.6.1a.php">próximo &raquo;</a></div>

<script type="text/javascript">
meuJson = { "notebooks": [
	{ "fabricante": {
		"nome": "Apple",
 		"site": "http:\/\/www.apple.com\/br\/"
		}, 
		"modelo": "MacBook MB881BZ/A", 
		"SO": "OS X 10.5"  
	},
	{ "fabricante": {
		"nome": "CCE",
		"site":"http:\/\/www.cce.com.br\/"
		}, 
		"modelo": "Notebook RLE232", 
		"SO": "Vista Basic"  
	},    
	{ "fabricante": {
		"nome": "Positivo",
		"site": "http:\/\/www.positivoinformatica.com.br\/"
		}, 
		"modelo": "Notebook R27", 
		"SO": "Linux"  
	}    
]}  

var obj = eval("meuJson");
var insereAqui = document.getElementById("insere")
var fab1 = obj.notebooks[1].fabricante.nome;
var site1 = obj.notebooks[1].fabricante.site;

var meuLink = "<a href=\"" + site1 + "\">Link para o site da " + fab1 + "</a>";
insereAqui.innerHTML = meuLink;
</script>
</div>
</div>
</body>
</html>
