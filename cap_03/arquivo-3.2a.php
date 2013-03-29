<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#carrega').click(function(e) {
	e.preventDefault();
	$('#insere_aqui').ajaxStart(function() {
	var iconCarregando = $('<img src="../icon/mini.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	$(this).html(iconCarregando);
	});
	$.get('exemplo-ajaxstart.html', 
	function(data) {
		var espera = function() { $('#insere_aqui').html(data) };
		setTimeout(espera, 3000);
	},
	'html');
});	
})
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de requisição com uso do método ajaxStart( )</h1>
<a href="exemplo-ajaxstart.html" id="carrega">Requisitar o arquivo exemplo-ajaxstart.html</a>

<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="../cap_02/arquivo-2.3c.php">&laquo; anterior</a> | <a href="arquivo-3.2b.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
