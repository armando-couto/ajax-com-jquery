<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
window.onload = function() {
	function iniciaAjax() {
	var objetoAjax = false;
		if (window.XMLHttpRequest) {
			objetoAjax = new XMLHttpRequest();
			alert("O objeto AJAX para este navegador é: XMLHttpRequest");
	} else if (window.ActiveXObject) {
		try {		
		objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
			alert("O objeto AJAX para este navegador é: Msxml2.XMLHTTP");
		} catch(e) {
			try {
			objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");			
			alert("O objeto AJAX para este navegador é: Microsoft.XMLHTTP");
		} catch(ex) {	
		objetoAjax = false;
       }
		}
	}
	return objetoAjax;
	}

// maneira padrao para atrelar evento clique no botao substitui onclick na marcacao.
	if (document.getElementById) {

		var disparador = document.getElementById("botao-disparador");
			disparador.onclick = function () {
				return iniciaAjax();
			};
	}
};
</script>
<body>
<div id="tudo">
<div id="conteudo">
<button type="button" id="botao-disparador">Inspecionar objeto Ajax</button>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-1.6.1a.php">pr&oacute;ximo &raquo;</a></div>

</div>
</div>
</body>
</html>
