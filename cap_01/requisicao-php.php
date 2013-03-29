<?php
  $gmtDate  = gmdate("D, d M Y H:i:s");
  header("Expires: {$gmtDate} GMT");
  header("Last-Modified: {$gmtDate} GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html; charset=utf-8");
  
  if(isset($_GET["insere"])) {
  sleep(4); /* Nota importante: A fun&ccedil;&atilde;o sleep() foi incluida com fins did&aacute;ticos, somente para mostrar o &iacute;cone de               carregamento do AJAX.*/  
  echo ("<p>Este &eacute; o conte&uacute;do requisitado para demonstrar a inser&ccedil;&atilde;o de uma imagem animada indicativa de carregamento.<p>
         <p>Usamos a imagem de um &aacute;tomo gerada no site <a href= 'http://www.preloaders.net/en/3d'>         http://www.preloaders.net/en/3d</a></p>");
  }
?>