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
#carrega {display:block;margin-top:10px;}
table {
	width:600px;
	border-collapse:collapse;
	border:1px solid #333;
	}
table tr td {
	border:1px solid #666;
	padding:3px 8px;
	}
table tr th {
	border:1px solid #333;
	padding:3px 8px;
	}
label {margin-right:15px;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	var requisitaJson = function () {
		
		$('#insere_aqui').empty();
		var html = '<table><thead><tr>';
		html += '<th>N<sup>o.</sup></th>';
		html += '<th>Nome</th>';
		html += '<th>E-mail</th>';
		html += '</tr></thead>';
		html += '<tbody>';
		$.getJSON('exemplo-json.js', 
			function(data) {
			var todosRegistros = data.length;
			$('input[value=""]').attr('value', todosRegistros) 
			var numeroRegistros = $(':checked').attr('value');
			$.each(data, function (i, obj) {
				if (i<numeroRegistros) {
				html += '<tr><td>' + (i+1) + '</td>';
				html += '<td>' + obj.nome + '</td>';
				html += '<td>' + obj.email + '</td></tr>';
				}
			});
			html += '</tbody>'
			$('#insere_aqui').append(html).append('</table>');
			$('#insere_aqui table thead tr').css('backgroundColor', '#e3f1ff')
			$('#insere_aqui table tbody tr:odd').css('backgroundColor', '#f6faff')
			$('tbody td:first-child').css('backgroundColor', '#e3f1ff')
			});
	};
$('#carrega').bind('click', requisitaJson);
})
// ]]>
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">

<h1>Exemplo de requisição com uso da função $.getJSON( )</h1>

<fieldset>
<legend>Faça sua requisição</legend>
<p>Número de registros a exibir</p>
<label><input type="radio" value="2" name="registros" checked="checked" />2</label>
<label><input type="radio" value="4" name="registros" />4</label>
<label><input type="radio" value="6" name="registros" />6</label>
<label><input type="radio" value="" name="registros" />Todos</label>
<button type="button" id="carrega">Mostrar registros</button>
<div id="insere_aqui"></div>
</fieldset>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.2c.php">&laquo; anterior</a> | <a href="arquivo-2.2e.php">próximo &raquo;</a></div>

</div>
</div>
</body>
</html>
