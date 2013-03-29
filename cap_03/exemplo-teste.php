<?php 
  if( isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["comentario"]) && $_POST["nome"] !== "" && $_POST["email"] !== "" && $_POST["comentario"] !== "") {
    $nome = strip_tags($_POST["nome"]);
    $email = strip_tags($_POST["email"]);
    $comentario = strip_tags($_POST["comentario"]);


sleep(2);  
    $html = "<h2>Este &eacute; o conte&uacute;do requisitado para demonstrar o m&eacute;todo <code>serialize( )</code></h2>\n";
    $html.= "<p>Os dados enviados foram:</p>\n";
    $html.= "<ul>\n";
	$html.= "<li>Nome: <span class=\"destaque\">$nome</span></li>\n";
	$html.= "<li>Email: <span class=\"destaque\">$email</span></li>\n";
	$html.= "<li>Comentario: <span class=\"destaque\">$comentario</span></li>\n";
	$html.= "</ul>";
    echo $html; 
  } else { 
    echo "<script type='text/javascript'>alert('Por favor preencha os campos Nome e Cidade')</script>";
}
?>