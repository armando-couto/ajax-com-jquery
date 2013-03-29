<?php 
  if( isset($_GET["nome"]) && isset($_GET["cidade"]) && $_GET["nome"] !== "" && $_GET["cidade"] !== "") {
    $nome = strip_tags($_GET["nome"]);
    $cidade = strip_tags($_GET["cidade"]);
  
    $html = "<h2>Este &eacute; o conte&uacute;do requisitado para demonstrar a fun&ccedil;&atilde;o \$.ajax( )</h2>\n";
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