<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
img.fotos {border:2px solid #09c;display:inline;float:left;width:100px; height:75px;margin:0 12px 12px 0;}
#nres{float:left;display:inline;margin-bottom:20px;}
label {margin-right:20px;}
.cabecalho {padding:8px 0 15px 8px;margin-bottom:10px;border:1px dotted #ccc;width:688px;overflow:auto;}
.cabecalho:hover {background:#f7f7f7;}
p.logo {float:right;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
// number formatting function
// copyright Stephen Chapman 24th March 2006, 22nd August 2008
// permission to use this function is granted provided
// that this copyright notice is retained intact
function formatNumber(num,dec,thou,pnt,curr1,curr2,n1,n2) {var x = Math.round(num * Math.pow(10,dec));if (x >= 0) n1=n2='';var y = (''+Math.abs(x)).split('');var z = y.length - dec; if (z<0) z--; for(var i = z; i < 0; i++) y.unshift('0'); if (z<0) z = 1; y.splice(z, 0, pnt); if(y[0] == pnt) y.unshift('0'); while (z > 3) {z-=3; y.splice(z,0,thou);}var r = curr1+n1+y.join('')+n2+curr2;return r;}
$(document).ready(function() {
	var requisitaBuscaImagemYahoo = function () {
	var iconCarregando = $('<img src="../icon/mini.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	    var palavraChave = $('input[name="query"]').val();
		if(palavraChave !== "") {
	var serializeDados = $('#form_um').serialize();
	var url = 'http://search.yahooapis.com/ImageSearchService/V1/imageSearch?' + serializeDados + '&callback=?'	
		$('#insere_aqui').empty();
			$('#insere_aqui').ajaxStart(function() {
			$('#mensagem_erro').empty();
			$(this).html(iconCarregando);
			});
		$.getJSON(
			url,function(data) {
		 	$.each(data, function(i,obj){
				if(obj.Result.length == 0) {
				$('#insere_aqui').empty();
				$('#mensagem_erro').html("<p class=\"destaque\">Lamento! Não foi encontrada nenhuma ocorrência para a sua busca</p>");
				}
				for (var j=0; j<obj.Result.length; j++) {
				if(j==0) {
				obj.totalResultsAvailable = formatNumber(obj.totalResultsAvailable,0,'.',' ','','',' ',' '); 
				var cabecalho = '<p class="cabecalho">Foram encontradas ' + obj.totalResultsAvailable + ' imagens para a busca por: <b>' + palavraChave + '</b></p>';
				}
				var texto = '<a href="'+obj.Result[j].ClickUrl+'" target="_blank"><img src="' + obj.Result[j].Thumbnail.Url + '" alt="" class="fotos" /></a>'; 
				$('#insere_aqui').append(texto)
				}
				$('#insere_aqui').prepend(cabecalho)
				$('#insere_aqui').append('<div class="clear"></div>')
		  });
        });
		$('#insere_aqui').ajaxComplete(function() {
		$('.icon, .destaque', this).remove();
	});
		} else { // da palavraChave
		alert('Por favor preencha o campo com a palavra-chave para sua busca')
		}
};
$('#carrega').bind('click', requisitaBuscaImagemYahoo);
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição para API JSON - SEARCH IMAGEM do Yahoo</h1>
<p>Este exemplo demonstra uma requisição de busca por imagens no site Yahoo <span class="destaque">por palavra-chave</span>.</p>

<form id="form_um" action="" method="get">
<fieldset>
<legend>Faça sua requisição</legend>

<input type="hidden" name="appid" value="YahooDemo" />
<input type="hidden" name="output" value="json" />

<p id="nres">Número de resultados a exibir<br />
<label>6<input type="radio" value="6" name="results" /></label>
<label>12<input type="radio" value="12" name="results" /></label>
<label>18<input type="radio" value="18" name="results" checked="checked" /></label>
<label>24<input type="radio" value="24" name="results" /></label>
<label>30<input type="radio" value="30" name="results" /></label>
<label>48<input type="radio" value="48" name="results" /></label></p>

<p class="clear">Digite uma palavra-chave para sua busca.</p>
<label>Palavra-chave: <input type="text" name="query"  value="copacabana" /></label> 
<button type="button" id="carrega">Buscar</button>


<p class="logo"><a href="http://www.yahoo.com" target="_blank"><img src="yahoo-brazil.gif" alt="powered by yahoo" /></a></p>
</fieldset>
</form>

<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-6.4a.php">&laquo; anterior</a> </div>

</div>
</div>
</body>
</html>
