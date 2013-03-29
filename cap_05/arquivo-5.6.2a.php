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
meuJson = { "editora": {
		"nome": "Novatec",
		"rua": "Luís Antônio dos Santos 110",
		"cidade": "São Paulo",
		"cep": "02460-000",
		"estado": "São Paulo",

"livros": [ 	
	{ "titulo": "jQuery a biblioteca do programador JavaScript",
	  "autor": "Maurício Samy Silva",
	  "capa":  "http:\/\/www.livroajaxjquery.com.br\/cap_05\/imagens\/jq.jpg", 
	  "descricao": "<p>jQuery é uma poderosa biblioteca JavaScript criada para simplificar a criação de efeitos visuais e de interatividade em websites. <p>Desenvolvedores especialistas em JavaScript, ao conhecerem as maravilhas de que a biblioteca é capaz, com certeza vão se perguntar: \"Por que não pensei nisso antes?\".</p> <p>Iniciantes, com noções rudimentares de JavaScript, experimentarão uma curva de aprendizado inimaginável para aqueles experientes com a linguagem.</p>",
	  "pdf": "http:\/\/www.novatec.com.br\/livros\/jquery\/capitulo9788575221785.pdf"
	}	  
]
}}

var obj = eval("meuJson");

var rotulo = obj.editora;

var nomeEditora = rotulo.nome; 
var ruaEditora = rotulo.rua;
var cidadeEditora = rotulo.cidade; 
var cepEditora = rotulo.cep;
var estadoEditora = rotulo.estado; 

var tituloJq = rotulo.livros[0].titulo;
var autorJq = rotulo.livros[0].autor;
var capaJq = rotulo.livros[0].capa;
var descricaoJq = rotulo.livros[0].descricao;
var pdfJq = rotulo.livros[0].pdf;

$(document).ready(function() {
$('.editora li a').click(function() {
	var alvo = $(this).attr('title');	
	switch(alvo) {
		case 'nome':
		$('#insere').html('<h4>Nome: ' + nomeEditora + '</h4>');
		break;
		case 'rua':
		$('#insere').html('<p>Rua: ' + ruaEditora + '</p>');
		break;
		case 'cidade':
		$('#insere').html('<p>Cidade: ' + cidadeEditora + '</p>');
		break;
		case 'cep':
		$('#insere').html('<p>CEP: ' + cepEditora + '</p>');
		break;
		case 'estado':
		$('#insere').html('<p>Estado: ' + estadoEditora + '</p>');
		break;
		default:
	};
});	

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
		$('#insere').html('<img src="' + capaJq + '" />');
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

<h1>JSON - Exemplo 2 </h1>
<p>Este exemplo demonstra a extração de dados de um arquivo JSON.</p>

<fieldset>
<legend>Extraia dados de um arquivo JSON</legend>

<div class="esq">
<h2>Dados da Editora</h2>
<ul class="editora">
<li><a href="#" title="nome">Nome</a></li>
<li><a href="#" title="rua">Rua</a></li>
<li><a href="#" title="cidade">Cidade</a></li>
<li><a href="#" title="cep">CEP</a></li>
<li><a href="#" title="estado">Estado</a></li>
</ul>
</div>

<div class="esq">
<h2>Livro jQuery</h2>
<ul class="livro-jq">
<li><a href="#" title="titulo">Título</a></li>
<li><a href="#" title="autor">Autor</a></li>
<li><a href="#" title="capa">Capa</a></li>
<li><a href="#" title="descricao">Descrição</a></li>
<li><a href="#" title="pdf">PDF</a></li>
</ul>
</div>

<h3 class="clear">Dado extraido:</h3>
<ul>
<li id="insere"></li>
</ul>
</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-5.6.1a.php">&laquo; anterior</a> | <a href="arquivo-5.6.3a.php">próximo &raquo;</a></div>

</div>
</div>

