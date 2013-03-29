<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<style type="text/css" media="all">
body {background:#fff; color:#333;margin:40px;}
#error_msg, #insert_here{
	width:300px;
	height:50px;
	margin:20px 0;
	border:1px solid red;
	padding:20px;
	color:red;
	}
#insert_here {
	border:1px solid blue;
	color:#333;
	}
</style>

<script type="text/javascript"> 




$(document).ready(function(){
	
	$.ajaxSetup({
	timeout: 5000,
	dataType: 'xml',
	error: function(xhr, er) {
	$('#error_msg').html('<p>Error ' + xhr.status + ' - ' + xhr.statusText + ' - ' + er +'</p>')
	}
	});
	
/*	$('#request').click(function(e) {
	e.preventDefault();
	$.get('exemplo-ajaxstop.html', 
	function(data, te) {
		alert(te + data)
		$('#insert_here').html(data);
	},
	'html'
	);
});	
*/
	$('#request').click(function(e) {
	e.preventDefault();
		$.ajax({
		url: 'exemplo-ajaxstop.html',
		//dataType: 'html',
		
		success: function(data) {
		
		$('#insert_here').html(data);
		
		},
		
		
		error: function(xhr,er) {
		$('#insert_here').html('<p>Error ' + xhr.status + ' - ' + xhr.statusText + ' - ' + er +'</p>')
		}
		
		
		})
		})














})
</script>
</head>
<body>
<p>Make request<br />
<button type="button" id="request">Request</button></p>
<div id="error_msg"></div>
<div id="insert_here"></div>
</body>
</html>
