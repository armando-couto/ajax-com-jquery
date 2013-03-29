<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
/* Estilização para abas */
body, html {height:100.1%;}
legend{padding-bottom:5px;} 
div.aba {
	background:#fff;
	text-align:justify;
	margin-bottom:20px;
	padding:10px 15px;
	border:1px solid #d1ecf6;
	}
.aba p{line-height:1.4;}
#aba_nav {
	margin:0;
	padding:3px 0;
	border-bottom:1px solid #d1ecf6;
	font:bold 12px sans-serif;
	}
#aba_nav li {
	list-style:none;
	margin-right:6px;
	display:inline;
	}
#aba_nav li a {
	padding:3px 6px;
	border:1px solid #d1ecf6;
	border-bottom:none;
	background:#d1ecf6;
	color:#09c;
	text-decoration:none;
	}
#aba_nav li a:hover {
	color:#fff;
	background:#09c;
	border-color:#d1ecf6;
	}
#aba_nav li a.corrente {
	color:#09c;
	background:#fff;
	border-bottom:1px solid #fff;
	}
.icon {display:block;margin-top:10px;}
table tr th, table tr td {background:#eee;padding:2px 5px;}
table, pre {width:637px}
pre {overflow:auto}
/* Fim estilização para abas */
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	$('#container_abas').prepend(
	'<ul id="aba_nav">	<li><a href="#aba1" class="corrente">Apresentação</a></li>  <li><a href="#aba2">$.ajax()</a></li> <li><a href="#aba3">$.get()</a></li> <li><a href="#aba4">$.post()</a></li> </ul>');
		
	$('.aba').css({
		display: 'none',
		marginTop: 0,
		borderTopWidth: 0
		});
		
	$('#aba1').css('display', 'block');

	$('a', $('#aba_nav')).click(function(e) {
		e.preventDefault();
			var iconCarregando = $('<img src="../icon/midi.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
			var i = $('a', $('#aba_nav')).index(this) + 1;			
			$(this).parents('#container_abas').children('.aba:visible').hide();
			$('fieldset').append(iconCarregando);
			$(this).parents('#aba_nav').find('a').removeClass('corrente');
			$(this).addClass('corrente');
				
				var espera = function() {
				$('#aba' + i).empty().load('load/exemplo-load.html #conteudo' + i,
					function() {  
					$(iconCarregando).css('display', 'none');
					$('#aba' + i).show('slow');
					$('#aba_nav').show();
				});
					};
				setTimeout(espera, 3000); // apenas para fins de demonstração do ícone de carregamento
	});
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição com uso do método load( )</h1>

<fieldset>

<legend>Livro AJAX com jQuery - Textos extraídos do 1<sup>o.</sup> Capítulo do livro</legend>

<div id="container_abas">
		
		<div id="aba1" class="aba">
<h2>Apresentação<br />
<small>Maurício "Maujor" Samy Silva</small></h2>

<p>Ajax com jQuery é uma poderosa combinação das funcionalidades do AJAX com a simplicidade que jQuery proporciona ao desenvolvimento com JavaScript. Seja você um especialista ou um iniciante no uso de AJAX certamente ficará maravilhado ao descobrir uma metodologia completamente diferente, inovadora, intuitiva e infinitamente mais simples de desenvolver AJAX.</p>

<p>O primeiro capítulo deste livro apresenta uma visão geral do AJAX segundo a maneira tradicional de desenvolvimento fazendo uma recapitulação dos seus conceitos fundamentais, dissertando sobre os métodos e propriedades do objeto XMLHttpRequest e explicando passo a passo os scripts fundamentais que reunidos formam uma biblioteca mínima para uma requisição AJAX. São estudadoss ainda os diferentes tipos de arquivos possíveis de serem requisitados e cada caso é ilustrado com um exemplo prático em funcionamento no site do livro.</p>

<p>No segundo e terceiro capítulos são apresentados e explicados detalhadamente os métodos e funcionalidades da biblioteca JQuery para AJAX. Os capítulos subsequentes são predominantemente práticos contendo exemplos cujo funcionamento pode ser conferido no site do livro.</p>		
		</div>

		<div id="aba2" class="aba"></div>
		
		<div id="aba3" class="aba"></div>

		<div id="aba4" class="aba"></div>

</div> <!-- Fim div#container_abas -->

</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.2i.php">&laquo; anterior</a> | <a href="arquivo-2.2k.php">próximo &raquo;</a></div>

</div>
</div>
</body>

</html>

