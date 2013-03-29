<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
img.fotos {border:2px solid #09c;display:inline;float:left;width:100px;height:75px;margin:0 12px 12px 0;}
label {margin-right:30px;}
p.logo {float:right;}
#nav {clear:both;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	var requisitaFlickr = function () {
	var numeroFotos = $('input[name="thumbs"]:checked').attr('value');
	var tagEscolhida = $('input[name="tag"]').val();
	var url = 'http://api.flickr.com/services/feeds/photos_public.gne?tags=' + tagEscolhida + '&format=json&jsoncallback=?'
		$('#insere_aqui').empty();
		$.getJSON(url,
        function(data) {
		 if ( (data.items).length == 0) {
		 alert('Lamento! \nNão foram encontradas fotos para a tag: ' + tagEscolhida); 
		 return false;
		 };
		 $.each(data.items, function(i,obj){
         $('<img class="fotos"/>').attr({ 
         alt: obj.title,
		 src: obj.media.m
        }).appendTo('#insere_aqui').wrap('<a href="' + obj.link + '" target="_blank"></a>');
			if ( i == numeroFotos ) return false;
          });
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
Você escolhe o número de fotos a exibir entre as quatro opções fornecidas (o número default é 12) e digita uma tag (ou palavra chave) para o tema das fotos (deixando a caixa de texto vazia serão apresentadas as últimas fotos postadas, independentemente dos temas). Serão apresentados thumbnails das fotos no tamanho 100 x 75px.</p>

<fieldset>
<legend>Faça sua requisição</legend>
<p>Número de thumbnails a exibir</p>
<label>8<input type="radio" value="7" name="thumbs" /></label>
<label>12<input type="radio" value="11" name="thumbs"  checked="checked" /></label>
<label>16<input type="radio" value="15" name="thumbs" /></label>
<label>20<input type="radio" value="19" name="thumbs" /></label>

<p>Digite uma tag para sua busca por fotos</p>
<label>Tag: <input type="text" name="tag"  value="" /></label> 
<button type="button" id="carrega">Buscar</button>
<p class="logo"><a href="http://www.flickr.com" target="_blank"><img src="flickr_logo.gif" alt="powered by flickr" /></a></p>
</fieldset>

<div id="insere_aqui"></div>
<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="../cap_05/arquivo-5.6.3a.php">&laquo; anterior</a> | <a href="arquivo-6.2b.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
