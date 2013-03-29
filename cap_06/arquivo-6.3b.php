<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
img.fotos {border:2px solid #09c;display:inline;float:left;}
#nres, #idioma {float:left;display:inline;margin-bottom:20px;}
#idioma {margin-left:50px;}
label {margin-right:20px;}
.modulo {border-top:1px dotted #ccc;padding: 0 8px 8px 8px;width:516px;overflow:auto;}
.modulo img { width:48px; height:48px;}
.modulo:hover{background:#f7f7f7;}
p.logo {float:right;}
#insere_aqui {font-size:14px;}
#insere_aqui span {
	color:#1f98c7 !important;
	font-weight:bold;
	font-size:14px;
	}
#conteudo #insere_aqui p {
	width:520px;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	var requisitaBuscaTwitter = function () {
	var iconCarregando = $('<img src="../icon/barra1.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	var numeroTwittersExibir = $('input[name="nte"]:checked').attr('value');
	var idiomaBusca = $('select[name="idioma"]').val(); 
	var palavraChave = $('input[name="pc"]').val();
		if(palavraChave !== "") {
	var url = 'http://search.twitter.com/search.json?lang=' + idiomaBusca;
	    url += '&rpp=' + numeroTwittersExibir;
	    url += '&q=' + palavraChave + '&callback=?';
		$('#insere_aqui').empty();
			$('#insere_aqui').ajaxStart(function() {
	$(this).html(iconCarregando);
	});
		$.getJSON(
		url,
        function(data) {
		 $.each(data.results, function(i,obj){
				var avatar = '<p><a href="http://www.twitter.com/' + obj.from_user + '" target="_blank">';
				    avatar += '<img src="' + obj.profile_image_url + '" class="esq" /></a>';	
				var texto =  '<div class="modulo">' + avatar + ' <span>' + obj.from_user + '</span> ' + obj.text + '</div>'; 
				$('#insere_aqui').append(texto)
		  });
        });
		$('#insere_aqui').ajaxComplete(function() {
		$('.icon, .destaque', this).remove();
	});
		} else {
		alert('Por favor preencha o campo com um termo para sua busca')
		}
};
$('#carrega').bind('click', requisitaBuscaTwitter);
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição para API JSON - SEARCH do Twitter</h1>
<p>Este exemplo demonstra uma requisição para as últimas postagens  no twitter em um <span class="destaque">determinado idioma e que contenham uma palavra-chave</span>.</p>

<fieldset>
<legend>Faça sua requisição</legend>
<p id="nres">Número de twitters a exibir<br />
<label>5<input type="radio" value="5" name="nte" /></label>
<label>10<input type="radio" value="10" name="nte"  checked="checked" /></label>
<label>40<input type="radio" value="40" name="nte" /></label>
<label>80<input type="radio" value="80" name="nte" /></label>
<label>100<input type="radio" value="100" name="nte" /></label></p>

<p id="idioma"><label>Escolha idioma<br />
<select name="idioma">
<option value="pt" selected="selected">Português</option>
<option value="es">Espanhol</option>
<option value="en">Inglês</option>
<option value="de">Alemão</option>
<option value="ru">Russo</option>
<option value="">Todas</option>
</select></label></p>

<p class="clear">Digite uma palavra-chave para sua busca por postagens no twitter<br />
A palavra-chave default "twitter" retorna as últimas postagens considerendo TODOS os usuários mundiais do twitter.</p>
<label>Palavra-chave: <input type="text" name="pc"  value="twitter" /></label> 
<button type="button" id="carrega">Buscar</button>
<p class="logo"><a href="http://www.twitter.com" target="_blank"><img src="powered-by-twitter-sig.gif" alt="powered by twitter" /></a></p>
</fieldset>

<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-6.3a.php">&laquo; anterior</a> | <a href="arquivo-6.4a.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
