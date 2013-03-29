<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
#insere img {display:block;
	margin:0; 
	padding:0;
	}
ul {list-style:none; 
	margin:0; 
	padding:0;
	}
h3 {
	border-top:1px dotted #ccc;
	padding-top:20px;
	}
.esq {margin-right:50px;
	margin-bottom:40px;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript">
//<![CDATA[
meuJson = {"livros": [ 	
	{ "titulo": "jQuery a biblioteca do programador JavaScript",
	  "autor": "Maurício Samy Silva",
	  "capa":  {	  
	  			"url": "http:\/\/www.livroajaxjquery.com.br\/cap_05\/imagens\/jq.jpg", 
	  			"alt": "Capa do livro jQuery do Maujor",
				"width": "160px",
				"height": "230px"
				},
	  "descricao": "<p>jQuery é uma poderosa biblioteca JavaScript criada para simplificar a criação de efeitos visuais e de interatividade em websites. <p>Desenvolvedores especialistas em JavaScript, ao conhecerem as maravilhas de que a biblioteca é capaz, com certeza vão se perguntar: \"Por que não pensei nisso antes?\".</p> <p>Iniciantes, com noções rudimentares de JavaScript, experimentarão uma curva de aprendizado inimaginável para aqueles experientes com a linguagem.</p>",
	  "pdf": "http://www.novatec.com.br/livros/jquery/capitulo9788575221785.pdf"
	}
]}

var obj = eval("meuJson");

var tituloJq = obj.livros[0].titulo;
var autorJq = obj.livros[0].autor;
var urlCapa = obj.livros[0].capa.url;
var altCapa = obj.livros[0].capa.alt;
var larguraCapa = obj.livros[0].capa.width;
var alturaCapa = obj.livros[0].capa.height;


var descricaoJq = obj.livros[0].descricao;
var pdfJq = obj.livros[0].pdf;

$(document).ready(function() {
$('.livro-jq li a').click(function() {
	var alvo = $(this).attr('title');	
	switch(alvo) {
		case 'titulo':
		$('#insere').html('<h4>Título: ' + tituloJq + '</h4>');
		break;
		case 'autor':
		$('#insere').html('<p>Autor: ' + autorJq + '</p>');
		break;
		case 'capa':
		$('#insere').html('<img src="' + urlCapa + '" alt="' + altCapa + '" width="' + larguraCapa + '" height="' + alturaCapa + '" />');
		break;
		case 'descricao':
		$('#insere').html(descricaoJq);
		break;
		case 'pdf':
		$('#insere').html('<p><a href="' + pdfJq + '" target="_blank">Link para trecho do livro em PDF</a></p>');
		break;
		default:
	};
});	

})
// ]]>
</script>
</head>

<body>
<div id="tudo">
<div id="conteudo">

<h1>JSON - Exemplo 3</h1>
<p>Este exemplo demonstra a extração de dados de um arquivo JSON.</p>

<fieldset>
<legend>Extraia dados de um arquivo JSON</legend>

<h2>Livro jQuery</h2>
<ul class="livro-jq">
<li><a href="#" title="titulo">Título</a></li>
<li><a href="#" title="autor">Autor</a></li>
<li><a href="#" title="capa">Capa</a></li>
<li><a href="#" title="descricao">Descrição</a></li>
<li><a href="#" title="pdf">PDF</a></li>
</ul>

<h3>Dado extraido:</h3>
<ul>
<li id="insere"></li>
</ul>
</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-5.6.2a.php">&laquo; anterior</a> | <a href="../cap_06/arquivo-6.2a.php">próximo &raquo;</a></div>

</div>
</div>

