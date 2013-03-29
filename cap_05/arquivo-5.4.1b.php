<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Sintaxe JSON - Exemplo 2 </h1>
<fieldset>
<p><a href="/cap_05/arquivo-5.4.1a.php">Recarregar a página</a></p>
</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-5.4.1a.php">&laquo; anterior</a> | <a href="arquivo-5.4.1c.php">próximo &raquo;</a></div>

<script type="text/javascript">
meuJson = { "informatica": [
	{ "notebooks": [
		{ "fabricante": "Apple", "modelo": "MacBook MB881BZ/A", "SO": "OS X 10.5"  } ,
		{ "fabricante": "CCE", "modelo": "Notebook RLE232", "SO": "Vista Basic"  },    
		{ "fabricante": "Positivo", "modelo": "Notebook R27", "SO": "Linux"  }    
	]},
	{ "monitores": [
		{ "fabricante": "LG", "tela": "LCD 22\'\'", "resmax": "1680 x 1050 @ 60Hz"  } ,
		{ "fabricante": "Samsung", "tela": "LCD 20\'\'", "resmax": "1680x1050"  },    
		{ "fabricante": "AOC", "tela": "LCD 17\'\'", "resmax": "1440 x 900 @ 75 hz"  }    
	]}
]}  

var obj = eval("meuJson");

var fabn2 = obj.informatica[0].notebooks[2].fabricante;
alert("Fabricante: " + fabn2) 

var fbm0 = obj.informatica[1].monitores[0].fabricante;
var te0 = obj.informatica[1].monitores[0].tela;
var rm0 = obj.informatica[1].monitores[0].resmax;

var msg = "O monitor do fabricante " + fbm0;
msg += " com tela de  " + te0;
msg += " suporta uma \n resolução máxima de " + rm0;

alert(msg) 
</script>
</div>
</div>
</body>
</html>
