<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
img.fotos {border:2px solid #09c;display:inline;float:left; margin:0 12px 12px 0;}
#nfotos, #lfotos {float:left;display:inline;margin-bottom:20px;}
#lfotos {margin-left:50px;}
label {margin-right:30px;}
p.logo {float:right;}
#nav {clear:both;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	var requisitaFlickr = function () {
	var iconCarregando = $('<img src="../icon/barra1.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	var numeroFotos = $('input[name="thumbs"]:checked').attr('value');
	var larguraFotos = $('input[name="fotos"]:checked').attr('value');
	var tagEscolhida = $('input[name="tag"]').val();
	var url = 'http://api.flickr.com/services/feeds/photos_public.gne?tags=' + tagEscolhida + '&format=json&jsoncallback=?'
			$('#insere_aqui').empty().ajaxStart(function() {
			$(this).html(iconCarregando);
			});
		$.getJSON(url,
        function(data) {
			if ( (data.items).length == 0) {
			$('#insere_aqui').empty();
			alert('Lamento! \nNão foram encontradas fotos para a tag: ' + tagEscolhida); 
			return false;
			};
		 $.each(data.items, function(i,obj){
         $('<img class="fotos"/>').attr({ 
         alt: obj.title,
		 src: obj.media.m,
		 width: larguraFotos,  
		 height: larguraFotos*3/4
        }).appendTo('#insere_aqui').wrap('<a href="' + obj.link + '" target="_blank"></a>');
            if ( i == numeroFotos ) return false;
          });
        });
		$('#insere_aqui').ajaxComplete(function() {
		$('.icon, .destaque', this).remove();
	});
	};
$('#carrega').bind('click', requisitaFlickr);
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição para API JSON do Flickr</h1>
<p>Este exemplo demonstra uma requisição para as últimas fotos públicas postadas no Flickr.<br />
Trata-se do mesmo exemplo anterior com os seguintes acréscimos: inserção do ícone de carregamento e escolha de uma largura para as fotos.</p>

<fieldset>
<legend>Faça sua requisição</legend>
<p id="nfotos">Número de fotos a exibir<br />
<label>8<input type="radio" value="7" name="thumbs" /></label>
<label>12<input type="radio" value="11" name="thumbs"  checked="checked" /></label>
<label>16<input type="radio" value="15" name="thumbs" /></label>
<label>20<input type="radio" value="19" name="thumbs" /></label></p>

<p id="lfotos">Largura das fotos<br />
<label>150px<input type="radio" value="150" name="fotos"  checked="checked" /></label>
<label>200px<input type="radio" value="200" name="fotos" /></label>
<label>300px<input type="radio" value="300" name="fotos" /></label></p>


<p class="clear">Digite uma tag para sua busca por fotos</p>
<label>Tag: <input type="text" name="tag"  value="" /></label> 
<button type="button" id="carrega">Buscar</button>
<p class="logo"><a href="http://www.flickr.com" target="_blank"><img src="flickr_logo.gif" alt="powered by flickr" /></a></p>
</fieldset>
<div id="insere_aqui"></div>


<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-6.2a.php">&laquo; anterior</a> | <a href="arquivo-6.3a.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
