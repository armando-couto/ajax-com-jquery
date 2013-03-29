<?php
  $gmtDate  = gmdate("D, d M Y H:i:s");
  header("Expires: {$gmtDate} GMT");
  header("Last-Modified: {$gmtDate} GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html; charset=utf-8");
  if(isset($_GET["pagina"])){
  switch($_GET["pagina"]){
    case "lancamentos":
      sleep(1);
	  include "inc/lancamentos.inc.php";
      break;
    case "bancodados":
      sleep(1);
      include "inc/bancodados.inc.php";
      break;
    case "programacao":
      sleep(1);
      include "inc/programacao.inc.php";
      break;
	case "internet":
      sleep(1);
	  include "inc/internet.inc.php";
      break;
	case "todas":
      sleep(2);
      include "inc/lancamentos.inc.php";
      include "inc/bancodados.inc.php";
      include "inc/programacao.inc.php";
	  include "inc/internet.inc.php";
	  break;
  }
} else {include "inc/lancamentos.inc.php";}
/* 
Nota importante: A funcaoo sleep() foi incluida com fins didáticos, 
somente para mostrar o ícone de carregamento do AJAX.  
*/
?>
