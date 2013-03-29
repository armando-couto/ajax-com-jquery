<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#carrega').click(function() {
	$.get('exemplo-get.php', 
	{ nome: 'Maujor', cidade: 'Rio de Janeiro' },
	function(data) {
	$('#insere_aqui').html(data);
	},
	'html');
	return false;
});	
})
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de requisi&ccedil;&atilde;o com uso da fun&ccedil;&atilde;o $.get( )</h1>
<a href="exemplo-get.php" id="carrega">Requisitar o arquivo exemplo-get.php</a>

<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="../cap_01/novatec/arquivo-1.6.8a.php">&laquo; anterior</a> | <a href="arquivo-2.2b.php">pr&oacute;ximo &raquo;</a></div>

</div>
</div>
</body>
</html>
