<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
input, textarea, #insere_aqui {
	border:1px solid #ccc;
	-moz-border-radius:8px;
	-khtml-border-radius:8px;
	-webkit-border-radius:8px;
	padding:0 8px;
	}
#insere_aqui {
	display:none;
	width:70%;
	padding:10px;
	background:#ffc;
	}
#insere_aqui p {
	margin:5px 0;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function(){
		var iconCarregando = $('<img src="../icon/mini.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	$('#form_um').submit(function(e) {
	e.preventDefault();
	$('#insere_aqui').empty();
	var serializeDados = $('#form_um').serializeArray();
	$('#insere_aqui').css('display', 'block');
	$.ajax({
			url: 'exemplo-serialize3.php', 
			dataType: 'html',
			type: 'POST',
			timeout: 5000,
			data: serializeDados,
			beforeSend: function(){
			$('#insere_aqui').html(iconCarregando);
			},
			complete: function() {
			$(iconCarregando).remove();
			},
			success: function(data, textStatus) {
				$('#insere_aqui').append('<h2>O array de dados enviado foi:</h2>');
				$.each(serializeDados, function(i, data) {
				$('#insere_aqui')
				.append(data.name + ': <b>' + data.value + '</b><br />');
				})
				$('#insere_aqui').append('<p>Notar que campos deixados vazios retornam valor vazio.</p>');
			
			},
			error: function(xhr,er) {
				$('#insere_aqui').html('<p class="destaque">Lamento! Ocorreu um erro. Por favor tente mais tarde.')
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
<h1>Exemplo de formatação de dados com uso do método serializeArray( )</h1>
<fieldset>
<legend>Entre os dados a enviar</legend>
<form action="exemplo-serialize2.php" method="post" id="form_um"> 
<p><label for="nome">Nome:<br />	
<input name="nome" type="text" id="nome" size="35" value="" />
</label><span class="destaque">(Obrigatório)</span></p>	

<p><label for="email">E-mail:<br />
<input name="email" type="text"  id="email" size="35" value="" />
</label><span class="destaque">(Obrigatório) </span>- não será divulgado</p>

<p><label for="comentario">Comentário: (mais de 8 caracteres)<br />
<textarea name="comentario" cols="35"   rows="8" id="comentario">
</textarea></label><span class="destaque"> (Obrigatório)</span></p>

<input type="submit" value="Enviar" id="submit" />
</form>
</fieldset>

<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-3.4b.php">&laquo; anterior</a> | <a href="../cap_04/arquivo-4.2a.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
