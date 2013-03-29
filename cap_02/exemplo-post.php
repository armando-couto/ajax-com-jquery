<?php 
$_POST["nome"] = strip_tags($_POST["nome"]);
$_POST["email"] = strip_tags($_POST["email"]);
$_POST["comentario"] = strip_tags($_POST["comentario"]);


$erros=0;
$msg="";
if (strlen($_POST['nome'])< 2) {
	$erros++;
	$msg.="<br /><b>Nome:</b> Digite seu nome ou apelido";
}
if (!ereg("^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$", $_POST['email'])) {
	$erros++;
	$msg.="<br /><b>Email:</b> Confira seu endereço de e-mail";
}
if (strlen($_POST['comentario']) < 8) {
	$erros++;
	$msg.="<br /><b>Comentário:</b> Digite seu comentário";
}
if ($erros>0){
	$msg="<b style='color:#c30;'>Sua mensagem não foi enviada</b><br />Por favor confira o(s) seguinte(s) campo(s): 	$msg";
echo $msg;
 
 } else {	
	
$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];
	
	$html = "<p>Olá <b>$nome</b>,<br />\n";
	$html.= "Grato pelo seu comentário!</p>\n";
    $html.= "<p>Você informou que seu email é: <b>$email</b></p>\n";
    $html.= "<p>O comentário enviado foi:</p>";
	$html.= "<p>&quot;$comentario&quot;</p>\n";
	echo $html; 
}
?>