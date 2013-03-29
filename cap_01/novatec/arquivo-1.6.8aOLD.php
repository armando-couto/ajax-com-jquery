<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
<title>Livro do Maujor | AJAX com jQuery</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Site de apoio ao livro AJAX com jQuery escrito pelo Maujor (Maur&iacute;cio Samy Silva) no ano de 2009." />
<meta name="keywords" content="javascript, ajax, jquery, web standards, padr&otilde;es web, maujor, livro do maujor" />
<meta name="author" content="Mauricio Samy Silva" />
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="pt-br" />
<style type="text/css" media="all">
body {
	margin:0 0 10px 0;
	padding:0;
	text-align:center;
	color:#333;
	background:#fff;
	font:10px/1.4 Verdana, Arial, Helvetica, sans-serif;
	}
h1, h2 , h3, h4, h5, h6 {
	color:#09c;
	margin:10px 0 5px 0;}
h1 {
	font-size:18px;
	}
h2 {
	font-size:14px;
	}
h3 {
	font-size:14px;
	}
h4, h5, h6 {
	font-size:12px;
	}
#tudo {
	width: 950px;
	margin:0 auto;
	text-align: left;
	}
#principal {                                 
	width:775px;
	min-height:593px; 
	border-bottom:1px solid #ccc; 
	float:right;
	display:inline;
	background:#edf2f2;
	padding-bottom:20px; 
	}
#principal h2 {                                 
	border-bottom:1px solid #09c;
	margin: 10px 25px 10px 20px;
	}
#menu, #menu * {
	margin:0;
	padding:0;
	}
#menu {
	width: 153px;
	list-style-type: none;
	}
* html #menu li {
	float: left;
	height: 1%;
	}
* html #menu li a { height: 1%; }
#menu li a, #menu li a:link {
	background: #edf2f2;
	border-width: 1px;
	border-color: #ffe #aaab9c #ccc #fff;
	border-style: solid;
	color:#039;
	text-decoration: none;
	padding: 3px 5px;
	display: block;
	}
#menu li a:hover {
	color: #000;
	background: #e0e9e9;
	}
#nav {
	clear:both;
	text-align:center;
	padding-top:8px;
	}
#nota {
	width:141px;
	margin-top:30px;
	padding:15px 5px 5px 8px;
	background:#edf2f2 url(imagens/nota-importante.gif) no-repeat 0 0;
	border:1px solid;
	border-color: #fff #aaab9c #ccc #fff;
	}
#nota p {
	border-bottom:1px solid #ccc; 
	padding-bottom:5px;
	}
img {border:none;}
.modulo{width:350px;float:left;margin:20px 0 10px 20px;}
.modulo p {margin:0;}
.modulo .imagem {float:left;display:block;margin-right:8px;}
hr {width:730px;clear:both; border-width:0 0 1px 0; margin-left:20px;}
dl {margin:0;} 
dt{
	background:url(imagens/bullet.gif) 80px 5px no-repeat;
	padding-left:90px;
	font-size:12px;
	font-weight:bold;
	}
dd a img {margin-top:10px;}
</style>
<script type="text/javascript">
//<![CDATA[
var tempo; 
function iniciaAjax() {
	var objetoAjax = false;
		if (window.XMLHttpRequest) {
			objetoAjax = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		try {		
		objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
			objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch(ex) {	
		objetoAjax = false;
       }
		}
	}
	return objetoAjax;
}
 
// Captura o link clicado
function linkClicado() {
	var listaLinks = document.getElementById("menu");
	var links = listaLinks.getElementsByTagName("a");
	for (var i=0; i<links.length; i++) {
		links[i].onclick = function() {
		var query = this.getAttribute("href").split("?")[1];
		var arquivo = "novatec.php?"+(query);
		return !requisitar(arquivo);
		};
	}
}

function carregando(container) {
	while (container.hasChildNodes()) {
	container.removeChild(container.lastChild);
	}
	
	var imagem = document.createElement("img");
	imagem.setAttribute("src", "carregando.gif");
	imagem.setAttribute("alt", "Carregando...");
	imagem.style.cssText = 'display:block; width:50px; height:50px; margin:30px auto;'; 
	container.appendChild(imagem);
}

function requisitar(arquivo) {
			var requisicaoAjax = iniciaAjax(); 
				if(requisicaoAjax) {
					carregando(document.getElementById("principal"));     
					requisicaoAjax.onreadystatechange = function () {	
					trataResposta(requisicaoAjax);	
					};
  requisicaoAjax.open("GET", arquivo, true);
  tempo = setTimeout(tempoEsgotado, 10000);
  requisicaoAjax.send(null);
    return true;
  } else {
    return false;
  }
}

function trataResposta(requisicaoAjax) {                 
	if(requisicaoAjax.readyState == 4) {
	clearTimeout(tempo);
	if(requisicaoAjax.status == 200 || requisicaoAjax.status == 304) {         
	document.getElementById("principal").innerHTML = requisicaoAjax.responseText;
} 
}
}
function tempoEsgotado() {
	var requisicaoAjax = iniciaAjax(); 
	requisicaoAjax.abort();
	alert("Ocorreu um problema na conex&atilde;o. Tente mais tarde");
	}
window.onload = linkClicado;
// ]]>
</script>
</head>
<body>
<div id="tudo">
<img src="imagens/novatec-topo.png" alt="imagem simulando topo" />

<div id="principal">
<?php include("novatec.php"); ?>
</div> <!-- Fim div#principal -->

<ul id="menu">
<li><a href="?pagina=lancamentos">Lan&ccedil;amentos</a></li>
<li><a href="?pagina=bancodados">Banco de dados</a></li>
<li><a href="?pagina=programacao">Programa&ccedil;&atilde;o</a></li>
<li><a href="?pagina=internet">Internet</a></li>
<li><a href="?pagina=todas">Todas as categorias</a></li>
</ul>

<div id="nota">
<p>Esta p&aacute;gina, baseada no site da <a href="http://novatec.com.br" title="Visite o site da Editora Novatec">Novatec Editora</a>, destina-se a demonstrar uma requisi&ccedil;&atilde;o AJAX com uso de PHP e integra o conjunto de p&aacute;ginas exemplo do livro AJAX com jQuery de autoria de Maur&iacute;cio Samy Silva.</p>
<p>A parte funcional da p&aacute;gina s&atilde;o os links de "Pesquisar Cat&aacute;logo", a coluna principal de conte&uacute;dos &agrave; direita e a navega&ccedil;&atilde;o inferior pelos exemplos do livro.</p>
<p>Os links na coluna principal remetem ao site da Novatec e nada têm a ver com a demonstra&ccedil;&atilde;o</p>
<p>O topo e a navega&ccedil;&atilde;o horizontal <strong>&eacute; uma imagem</strong> aqui colocada somente para compor o visual da p&aacute;gina.</p> 
</div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="../arquivo-1.6.7a.php">&laquo; anterior</a> | <a href="#">pr&oacute;ximo &raquo;</a></div>

</div> <!-- Fim div#tudo -->

</body>
</html>
