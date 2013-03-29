<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#carrega').click(function() {
	var seuNome = $('input[name="nome"]').val();
	var suaCidade = $('input[name="cidade"]').val();
		$.get('exemplo-get.php', 
		{ nome: seuNome, cidade: suaCidade },
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
<h1>Exemplo de requisição com uso da função $.get( )</h1>
<fieldset>
<legend>Entre os dados a enviar</legend>
<label>Nome: <input type="text" name="nome" /></label>
<label>Cidade: <input type="text" name="cidade" /></label>
<button type="button" id="carrega">Enviar</button>
</fieldset>

<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.2a.php">&laquo; anterior</a> | <a href="arquivo-2.2c.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
