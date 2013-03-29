<?php
  $gmtDate  = gmdate("D, d M Y H:i:s");
  header("Expires: {$gmtDate} GMT");
  header("Last-Modified: {$gmtDate} GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html; charset=utf-8");
  
  if(isset($_GET["insere"])) {
echo ("<h2>Este &eacute; o conte&uacute;do requisitado para demonstrar o efeito de destaque em uma inser&ccedil;&atilde;o.</h2><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. Suspendisse potenti. Donec ullamcorper cursus dolor. Duis vitae ipsum. Maecenas dapibus hendrerit diam. Morbi varius, massa id pretium accumsan, nunc lorem congue libero, ut euismod metus libero id nulla. Duis posuere odio sed velit vulputate venenatis. Suspendisse et dui ac metus auctor fringilla. Curabitur interdum augue a pede.</p>");
  }
?>