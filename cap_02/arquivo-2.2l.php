<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
#mensagem_erro p {
	padding:3px 20px;
	width:378px;
	border: 1px solid #ccc;
	background:#eee;
	font-size:14px;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#carrega').click(function(e) {
	e.preventDefault();
	var seuNome = $('input[name="nome"]').val();
	var suaCidade = $('input[name="cidade"]').val();
		$.ajax({
			url: 'exemplo-ajax1.php', 
			dataType: 'xml',
			data: {nome: seuNome, cidade: suaCidade},
			type: 'GET',
			success: function(data, textStatus) {
			$('#insere_aqui').html('<p>' + data + '</p>');
			},
			error: function(xhr,er) {
			$('#mensagem_erro').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er +'</p>')
			}		
		});
	});
})
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de requisi&ccedil;&atilde;o com uso da fun&ccedil;&atilde;o $.ajax( )<br />
<small class="destaque">Requisição com falha no tipo de dado.</small></h1>
<fieldset>
<legend>Entre os dados a enviar</legend>
<label>Nome: <input type="text" name="nome" /></label>
<label>Cidade: <input type="text" name="cidade" /></label>
<button type="button" id="carrega">Enviar</button>
</fieldset>
<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.2k.php">&laquo; anterior</a> | <a href="arquivo-2.2m.php">pr&oacute;ximo &raquo;</a></div>

</div>
</div>
</body>
</html>
