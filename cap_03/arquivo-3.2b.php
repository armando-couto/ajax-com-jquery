<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#carrega').click(function(e) {
	e.preventDefault();
		$('h1').ajaxStop(function() {
		$(this)
		.html('Conteúdo inserido com uso do método ajaxStop()')
		.css('color', '#c30');
		});
	$.get('exemplo-ajaxstop.html', 
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
<h1>Exemplo de requisi&ccedil;&atilde;o com uso do método ajaxStop( )</h1>
<a href="exemplo-ajaxstop.html" id="carrega">Requisitar o arquivo exemplo-ajaxstop.html</a>

<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-3.2a.php">&laquo; anterior</a> | <a href="arquivo-3.2c.php">pr&oacute;ximo &raquo;</a></div>

</div>
</div>
</body>
</html>
