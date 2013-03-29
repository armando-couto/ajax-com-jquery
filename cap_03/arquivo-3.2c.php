<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#carrega').click(function(e) {
	e.preventDefault();
		$('#mensagem_erro').ajaxError(function() {
		$(this).append('<p class="destaque">Ocorreu um erro na requisição. Por favor tente mais tarde</p>')
		});
	$.get('exemplo-ajaxerror.html', 
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
<h1>Exemplo de requisição com uso do método ajaxError( )</h1>
<a href="exemplo-ajaxerror.html" id="carrega">Requisitar o arquivo exemplo-ajaxerror.html</a>
<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-3.2b.php">&laquo; anterior</a> | <a href="arquivo-3.2d.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
