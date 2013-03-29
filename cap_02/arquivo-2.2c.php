<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
#submit {margin-top:10px;}
#insere_aqui p{margin:5px 0}
#insere_aqui {
	width:400px;
	display:none;
	background:#e3f1ff;
	padding:3px 15px;
	}
fieldset, #insere_aqui, input, textarea {
border:1px solid #ddd;
-moz-border-radius:10px;
-webkit-border-radius:10px;
padding-left:10px;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	$('#nome, #email, #comentario').focus(function() {
	$(this).val('').css('backgroundColor', '#f6faff');
	}).blur(function() {
	$(this).css('backgroundColor', '#fff');
	});
	
	var requisitaPost = function () {
		$('#nome, #email, #comentario').unbind('focus');
		var nomeEnviado = $('#nome').val();
		var emailEnviado = $('#email').val();
		var comentarioEnviado = $('#comentario').val();
		$.post('exemplo-post.php', 
		{ nome: nomeEnviado, email: emailEnviado, comentario: comentarioEnviado },
		function(data) {
		$('#insere_aqui').fadeIn(2000).html(data);
		},
		'html');
	return false;
	};
$('#submit').bind('click', requisitaPost);
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição com uso da função $.post( )</h1>

<form action="exemplo-post.php" method="post">
<fieldset>
<legend>Deixe seu comentário</legend>

<p><label for="nome">Nome:<br />	
<input name="nome" type="text" id="nome" size="35" value="
<?php
if (!$_POST['nome']) {
echo "*";
}else{
echo $_POST['nome'];
}
?>
" /> 
</label><span class="destaque">(Obrigatório)</span></p>	

<p><label for="email">E-mail:<br />
<input name="email" type="text"  id="email" size="35" value="
<?php
if (!$_POST['email']) {
echo "*";
}else{
echo $_POST['email'];
}
?>
" /> 
</label><span class="destaque">(Obrigatório) </span>- não será divulgado</p>

<p><label for="comentario">Comentário: (mais de 8 caracteres)<br />
<textarea name="comentario" cols="35"   rows="8" id="comentario">
<?php
if (!$_POST['comentario']) {
echo "Comente";
}else{
echo $_POST['comentario'];
}
?>
</textarea></label></p>

<p><input name="submit" type="submit"  id="submit"  value="Enviar" /></p>

<div id="insere_aqui"></div>

</fieldset>
</form>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.2b.php">&laquo; anterior</a> | <a href="arquivo-2.2d.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
