<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="estilos.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
		var iconCarregando = $('<img src="../icon/barra1.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	$('#menu li a').click(function(e) {
	e.preventDefault();
	$('#principal').empty();
	var url = $(this).attr('href');
	$.ajax({
			url: url, 
			dataType: 'xml',
			type: 'POST',
			timeout: 10000,
			beforeSend: function(){
			$('#principal').html(iconCarregando);
			},
			complete: function() {
			$(iconCarregando).remove();
			},
			success: function(data, textStatus) {
			
			if (url == 'xml/lancamentos.xml') {
			
				var html = '<h2>' + $(data).find('title').text() + '</h2>'
				$(data).find('imagem').each(function(i) {
				html += '<div class= "modulo">';
				html += '<img src="' + $(this).find('url').text() + '" alt="' +  $(this).attr('alt')  + '" class="imagem" />'
				html += $(this).next().text();
				html += '</div>';
				if (i%2 !==0) {html += '<hr/>'};
				});
				$('#principal').html(html);
			
			} else {
				
				var html = '<h2>' + $(data).find('title').text() + '</h2>'
				$(data).find('item').each(function(i) {
				html += '<div class= "modulo">';
				html += '<img src="' + $(this).find('url').text() + '" alt="' +  $(this).find('imagem').attr('alt')  + '"  class="imagem" />'
				html += '<dl>';
				html += '<dt><a href="' + $(this).find('link').attr('alvo') + '">' + $(this).find('link').text() + '</a></dt>';
				
				html += '<dd>Autor: ' + $(this).find('autor').text() + '</dd>'
				html += '<dd>Ano: ' + $(this).find('ano').text() + '</dd>'
				html += '<dd>Páginas: ' + $(this).find('paginas').text() + '</dd>'
				html += '<dd>Preço: R$ ' + $(this).find('preco').text() + '</dd>'
				html += '<dd><a href="#"><img src="imagens/botao-comprar.gif" alt="Botão comprar" /></a></dd>' 
				html += '</dl></div>';
				if (i%2 !==0) {html += '<hr/>'};
				});
				$('#principal').html(html);
			}
			}, 
			error: function(xhr,er) {
				$('#principal').html('<p class="destaque">Lamento! Ocorreu um erro. Por favor tente mais tarde.')
			}		
		});
	});	
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<img src="imagens/novatec-topo.png" alt="imagem simulando topo" />

<div id="principal">
<h1>Área destinada a demonstrar requisições AJAX para arquivos XML</h1> 
<p>Use o menu da coluna esquerda para requisitar um determinado catálogo de livros</p> 
</div> <!-- Fim div#principal -->

<ul id="menu">
<li><a href="xml/lancamentos.xml">Lançamentos</a></li>
<li><a href="xml/bancodados.xml">Banco de dados</a></li>
<li><a href="xml/programacao.xml">Programação</a></li>
<li><a href="xml/internet.xml">Internet</a></li>
<li><a href="xml/todas.xml">Todas as categorias</a></li>
</ul>

<div id="nav">Arquivos do livro do Maujor | AJAX com jQuery: <a href="../cap_03/arquivo-3.4c.php">&laquo; anterior</a> | <a href="arquivo-4.3a.php">próximo &raquo;</a></div>

</div> <!-- Fim div#tudo -->

</body>
</html>
