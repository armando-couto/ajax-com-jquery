<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function(){
		var iconCarregando = $('<img src="../icon/mini.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	$('#carrega').click(function(e) {
	e.preventDefault();
	$.ajax({
			url: 'exemplo-timeout.php', 
			dataType: 'html',
			type: 'GET',
			timeout: 4000, 
			beforeSend: function(){
			$('#insere_aqui').html(iconCarregando);
			},
			complete: function() {
			$(iconCarregando).remove();
			},
			success: function(data, textStatus) {
			$('#insere_aqui').html('<p>' + data + '</p>');
			},
			error: function(xhr,er) {
    			if (er == 'timeout') {
      			$('#mensagem_erro').html('<p class="destaque">Ops! ocorreu um erro de timeout</p>');
				} else {
				$('#mensagem_erro').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er +'</p>')
	};
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
<h1>Exemplo de requisição com uso do argumento timeout para $.ajax( )</h1>
<a href="exemplo-timeout.php" id="carrega">Requisitar o arquivo exemplo-timeout.php</a>

<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-3.3a.php">&laquo; anterior</a> | <a href="arquivo-3.4a.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
