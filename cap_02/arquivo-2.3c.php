<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
h2 {
	color: red;
	background:yellow;;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('#criarH2').click(function() {
	$(this).after('<br /><h2>Novo cabeçalho nível 2</h2>');
	});
})
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Regras CSS aplicadas a elementos inseridos no DOM</h1>
<fieldset>
<button type="button" id="criarH2">Criar H2</button>
</fieldset>
<h2>Cabeçalho H2 existente</h2>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. Suspendisse potenti.</p>

<h2>Outro cabeçalho H2 existente</h2>
<p> Donec ullamcorper cursus dolor. Duis vitae ipsum. Maecenas dapibus hendrerit diam. Morbi varius, massa id pretium accumsan, nunc lorem congue libero, ut euismod metus libero id nulla. Duis posuere odio sed velit vulputate venenatis. Suspendisse et dui ac metus auctor fringilla. Curabitur interdum augue a pede.</p>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.3b.php">&laquo; anterior</a> | <a href="../cap_03/arquivo-3.2a.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
