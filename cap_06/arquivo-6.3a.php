<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
img.fotos {border:2px solid #09c;display:inline;float:left;}
#nres, #npagina {float:left;display:inline;margin-bottom:20px;}
#npagina {margin-left:50px;}
label {margin-right:20px;}
.modulo {border-top:1px dashed #ccc; padding:0 8px 8px 8px;width:516px;}
.modulo img { width:48px; height:48px;}
.cabecalho {padding:8px 0 15px 8px;margin-bottom:10px;border:1px dotted #ccc;width:688px;overflow:auto;}
.cabecalho:hover, .modulo:hover{background:#f7f7f7;}
p.logo {float:right;}
#insere_aqui {font-size:14px;}
#insere_aqui p a {
	color:#1f98c7 !important;
	text-decoration:none;
	font-weight:bold;
	font-size:14px;
	}
#conteudo #insere_aqui p a:hover {
	text-decoration:underline;
	}
#conteudo #insere_aqui p {
	width:520px;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	var requisitaTimelineTwitter = function () {
	var iconCarregando = $('<img src="../icon/barra1.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	var numeroTwittersPagina = $('input[name="ntp"]:checked').attr('value');
	var numeroPaginaMostrar = $('input[name="np"]:checked').attr('value');
	var usuarioBusca = $('input[name="pc"]').val();
		if(usuarioBusca !== "") {
	var url = 'http://twitter.com/statuses/user_timeline/' + usuarioBusca +'.json?&count=' + numeroTwittersPagina + '&page=' + numeroPaginaMostrar + '&callback=?'
		$('#insere_aqui').empty(); 
		$('#insere_aqui').ajaxStart(function() {
		$(this).html(iconCarregando);
		});
		$.getJSON(
		url,
        function(data) {
		 $.each(data, function(i,obj) {					
			if(i==0) {
				var cabecalho = '<p class="cabecalho">'
				cabecalho +=  '<a href="http://www.twitter.com/' +  obj.user.screen_name + '" target="_blank">'; 
				cabecalho += '<img src="' + obj.user.profile_image_url + '" class="esq" />';
				cabecalho += '</a><b>Nome: </b>' + obj.user.screen_name; 
				cabecalho += '<br /><b>Web: </b><a href="'	+ obj.user.url + '">' + obj.user.url + '</a>';
				cabecalho += '<br /><b>Bio: </b>' + obj.user.description + '</p>';
				cabecalho += '<div class="clear"></div>'; 
				
				var backRepete = (obj.user.profile_background_tile) ? 'repeat' : 'no-repeat';
				$('body').css({
				backgroundColor: '#' + obj.user.profile_background_color,
				backgroundImage: 'url(' + obj.user.profile_background_image_url + ')',   
				backgroundRepeat: backRepete 
				});
				$('#insere_aqui').append(cabecalho)
			}
				var texto = '<div class="modulo"><p>';
				texto += '<a href="' + obj.user.url +'">' + obj.user.name + '</a>';
				texto += ' ' + obj.text + '</p></div>';
				$('#insere_aqui').append(texto)
		  });
        });
		$('#insere_aqui').ajaxComplete(function() {
		$('.icon, .destaque', this).remove();
	});
		} else {
		alert('Por favor preencha o campo com o nome do usuário')
		}
$('#insere_aqui').append('<p><b>Página n<sup>o.</sup>' + numeroPaginaMostrar + '</b></p>')
};
$('#carrega').bind('click', requisitaTimelineTwitter);
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição para API JSON - TIMELINE do Twitter</h1>
<p>Este exemplo demonstra uma requisição para as <span class="destaque">últimas postagens de um usuário</span> do twitter.</p>

<fieldset>
<legend>Faça sua requisição</legend>
<p id="nres">Número de twitters por página<br />
<label>2<input type="radio" value="2" name="ntp" /></label>
<label>5<input type="radio" value="5" name="ntp"  checked="checked" /></label>
<label>50<input type="radio" value="50" name="ntp" /></label>
<label>100<input type="radio" value="100" name="ntp" /></label></p>

<p id="npagina">Número da página a mostrar<br />
<label>1<input type="radio" value="1" name="np"  checked="checked" /></label>
<label>2<input type="radio" value="2" name="np" /></label>
<label>3<input type="radio" value="3" name="np" /></label></p>

<p class="clear">Digite um nome de usuário <b>válido</b> para sua busca por twitters<br />
Se você não conhece o twitter tente os seguinte nomes: maujor (default), wasp, jquery, arteccom, novateceditora ou visite <a href="http://twitsnear.me/" target="_blank">http://twitsnear.me/</a> para ver nomes válidos de twitteiros próximos à você.</p>
<label>Usuário: <input type="text" name="pc"  value="maujor" /></label> 
<button type="button" id="carrega">Buscar</button>
<p class="logo"><a href="http://www.twitter.com" target="_blank"><img src="powered-by-twitter-sig.gif" alt="powered by twitter" /></a></p>
</fieldset>

<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-6.2b.php">&laquo; anterior</a> | <a href="arquivo-6.3b.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
