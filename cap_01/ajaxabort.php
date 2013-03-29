<?php
  $gmtDate  = gmdate("D, d M Y H:i:s");
  header("Expires: {$gmtDate} GMT");
  header("Last-Modified: {$gmtDate} GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html; charset=utf-8");
  if(isset($_GET["abortar"])) {
  sleep(7000); /* Nota importante: A fun&ccedil;&atilde;o sleep() foi incluida com fins did&aacute;ticos, somente para mostrar uma requisi&ccedil;&atilde;o abortada.*/  
   
  echo ("<p>Este &eacute; o conte&uacute;do requisitado para demonstrar o m&eacute;todo abort()</p>");
  } 
?>