<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="destaque.js"></script>
<style type="text/css" media="all">
#insere_aqui {
	padding:0;
	border-top:none;
	margin:0;
	}
#insere {
	padding:15px 0;
	border-top:1px dotted #ddd;
	margin:20px 0;
	}
</style>

</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de destaque na requisi&ccedil;&atilde;o</h1>
<a href="?insere=ok" id="clink">Requisitar o arquivo destaque.php </a>

<div id="insere">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh.</p>
<div id="insere_aqui">
<?php include "destaque.php"; ?>
</div>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh.</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. Suspendisse potenti. Donec ullamcorper cursus dolor. Duis vitae ipsum. Maecenas dapibus hendrerit diam. Morbi varius, massa id pretium accumsan, nunc lorem congue libero, ut euismod metus libero id nulla. Duis posuere odio sed velit vulputate venenatis. Suspendisse et dui ac metus auctor fringilla. Curabitur interdum augue a pede.</p>
</div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-1.6.5a.php">&laquo; anterior</a> | <a href="arquivo-1.6.7a.php">pr&oacute;ximo &raquo;</a></div>

</div>
</div>
</body>
</html>
