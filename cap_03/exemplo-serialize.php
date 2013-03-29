<?php 
  if( isset($_POST["nome"]) && isset($_POST["cidade"]) && $_POST["nome"] !== "" && $_POST["cidade"] !== "") {
    $nome = strip_tags($_POST["nome"]);
    $cidade = strip_tags($_POST["cidade"]);
sleep(2);  
    $html = "<h2>Este &eacute; o conte&uacute;do requisitado para demonstrar o m&eacute;todo <code>serialize( )</code></h2>\n";
    $html.= "<p>Os dados enviados foram:</p>\n";
    $html.= "<ul>\n";
	$html.= "<li>Nome: <span class=\"destaque\">$nome</span></li>\n";
	$html.= "<li>Cidade: <span class=\"destaque\">$cidade</span></li>\n";
	$html.= "</ul>";
    echo $html; 
  } else { 
    echo "<script type='text/javascript'>alert('Por favor preencha os campos Nome e Cidade')</script>";
}
?>