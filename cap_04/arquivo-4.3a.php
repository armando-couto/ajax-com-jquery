<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
h3 {
	border-bottom: 1px solid #09c;
	padding-bottom:2px;
	margin-top:20px;
}
h3 a, h2 a, h3 a:visited, h2 a:visited {
	color:#09c !important;
	}
h2 a:hover, h3 a:hover {
	color:#c30 !important;
	text-decoration:none !important;
	}
dd {margin:0; padding:0:}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function(){
		var iconCarregando = $('<img src="../icon/barra1.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	$('#carrega').click(function(e) {
	e.preventDefault();
	$('#insere_aqui').empty();
	$.ajax({
			url: 'rss/feed-maujor.xml', 
			dataType: 'xml',
			type: 'POST',
			timeout: 10000,
			beforeSend: function(){
			$('#insere_aqui').html(iconCarregando);
			},
			complete: function() {
			$(iconCarregando).remove();
			},
			success: function(data, textStatus) {
			var tituloSite = $(data).find('channel title:first').text();	
			var linkTituloSite = $(data).find('channel link:first').text(); 	
				
				var html = '<h2><a href="' + linkTituloSite + '">' + tituloSite + '</a></h2>'
				
				$(data).find('item').each(function(i) {
				var	tituloMateria = $(this).find('title').text();	
				var	linkTituloMateria = $(this).find('description').next().text();	
				html += '<h3><a href="' + linkTituloMateria + '">' + tituloMateria + '</a></h3>';				
				html += $(this).find('description').text();				
				});
				
				$('#insere_aqui').html(html);
			}, 
			error: function(xhr,er) {
				$('#insere_aqui').html('<p class="destaque">Lamento! Ocorreu um erro. Por favor tente mais tarde.' + xhr.statusText + xhr.status)
			}		
		});
	});	
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de requisição de um arquivo XML</h1>
<a href="rss/feed-maujor.xml" id="carrega">Requisitar o arquivo feed-maujor.xml</a>
<p>Este exemplo demonstra a requisição de um arquivo XML típico, para feeds de um site. O arquivo requisitado é estático e foi hospedado no servidor no qual está hospedada esta página.</p>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-4.2a.php">&laquo; anterior</a> | <a href="../cap_05/arquivo-5.4.1a.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
