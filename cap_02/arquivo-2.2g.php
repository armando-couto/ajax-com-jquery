<?php include("../includes-arquivos/doc-meta-utf-8.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
fieldset {
padding:10px 15px;
border:1px solid #ddd;
-moz-border-radius:10px;
-webkit-border-radius:10px;
}
legend {margin-bottom:10px;}
fieldset, input, textarea {
border:1px solid #ddd;
-moz-border-radius:10px;
-webkit-border-radius:10px;
padding-left:10px;
}
#carrega {margin:10px 0 0 5px;}
.alvo {
	width:155px;
	height:85px;
	float:left;
	background:#66aaff;
	margin:6px;
	}
.alvo p {
	color:#fff; 
	font-weight:bold;
	text-align:center;
	line-height:60px;
	cursor:pointer;
	}
button, img,span {display:block;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	var iconCarregando = $('<img src="../icon/mini.gif" />');
	var pluginCarregado = $('<span class="destaque">Plugin carregado</span>');
	var requisitaScript = function() {
	$(iconCarregando).insertAfter('#carrega');
	$.getScript('http://www.clickmaujor.com/perigo.js', function() {
	$(iconCarregando).hide();
	$(pluginCarregado).insertAfter('#carrega')
	.css({background: '#ffc', padding:'3px 5px'})
	.fadeOut(3000);
	
	tipoCanto = ['20px', 'bevel 15px', 'dog 20px', 'notch 20px', 'fray 15px', 'sculpt 10px','bite 15px', 'sharp 15px'];
	$('.alvo').click(function() {
		
		var i = $('.alvo').index(this);
		$(this).corner(tipoCanto[i]);
	});
	});
	};
		$('#carrega').bind('click', requisitaScript);
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição com uso da função $.getScript( )<br />
<span class="destaque">demonstrando o perigo de requisões para domínios não confiáveis.</span></h1>

<fieldset>
<legend>Cantos arredondados com plugin jQuery</legend>

<p>Logo após o carregamento da página clique nos retângulos e observe que nada acontece.<br />
 A seguir faça a requisição AJAX clicando no botão abaixo e <span class="destaque">observe o que pode acontecer com requisições de scripts para domínios não confiáveis.</span>.</p>
<button type="button" id="carrega">Carregar plugin</button>
<div class="alvo"><p>Arredondado</p></div>
<div class="alvo"><p>Chanfrado</p></div>
<div class="alvo"><p>Orelha de cão</p></div>
<div class="alvo"><p>90 graus</p></div>
<div class="alvo"><p>Esfiapado</p></div>
<div class="alvo"><p>Esculpido</p></div>
<div class="alvo"><p>Côncavo</p></div>
<div class="alvo"><p>Agudo</p></div>
</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.2f.php">&laquo; anterior</a> | <a href="arquivo-2.2h.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
