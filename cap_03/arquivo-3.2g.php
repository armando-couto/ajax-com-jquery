<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
#mensagem_erro p {
	padding:3px 20px;
	width:458px;
	border: 1px solid #ccc;
	background:#eee;
	font-size:14px;
	}
table#t1 {
	width:500px;
	margin:25px 0;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#carrega').click(function(e) {
	e.preventDefault();
		$('#mensagem').ajaxComplete(function(event, xhr, settings) {
		$(this).append('<p class="destaque">Requisição AJAX terminada. Resultado: ' + xhr.status + ' - ' + xhr.statusText +  '</p>');
		var inspecionar = ''; 
		inspecionar += '<table id="t1">';
		inspecionar += '<tr><th>Objeto.propriedade</th><th>Resultado</th></tr>';
		inspecionar += '<tr><td>event.type</td><td>' + event.type + '</td></tr>';
		inspecionar += '<tr><td>event.target.nodeName</td><td>' + event.target.nodeName + '</td></tr>';
		inspecionar += '<tr><td>xhr.getResponseHeader("Content-Type")</td><td>' + xhr.getResponseHeader('Content-Type') + '</td></tr>';
		inspecionar += '<tr><td>xhr.getResponseHeader("Date")</td><td>' + xhr.getResponseHeader('Date') + '</td></tr>';
		inspecionar += '<tr><td>xhr.getResponseHeader("Server")</td><td>' + xhr.getResponseHeader('Server') + '</td></tr>';
		inspecionar += '<tr><td>xhr.status</td><td>' + xhr.status+ '</td></tr>';
		inspecionar += '<tr><td>xhr.statusText</td><td>' + xhr.statusText + '</td></tr>';
		inspecionar += '<tr><td>xhr.readyState</td><td>' + xhr.readyState + '</td></tr>';
		inspecionar += '<tr><td>settings.url</td><td>' + settings.url + '</td></tr>';
		inspecionar += '<tr><td>settings.type</td><td>' + settings.type + '</td></tr>';
		inspecionar += '</table>'; 
		$(this).append(inspecionar);
		});
	$.get('exemplo-ajaxerror.html', {nome: 'maujor'}, 
	function(data) {
		$('#insere_aqui').html(data);
	},
	'html')
});	
})
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de requisição com uso dos parâmetros do método<br />ajaxComplete(event, xhr, settings) &#8212;
<small class="destaque">Requisição falha</small></h1>
<a href="exemplo-ajaxerror.html" id="carrega">Requisitar o arquivo exemplo-ajaxerror.html</a>
<p>Este exemplo mostra os valores de algumas das propriedades retornadas pelos parâmetros disponíveis na função.</p>

<div id="mensagem"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-3.2f.php">&laquo; anterior</a> | <a href="arquivo-3.3a.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
