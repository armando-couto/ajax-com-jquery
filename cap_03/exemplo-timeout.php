<?php
sleep(5);
?>
<h2>Este é o conteúdo requisitado para demonstrar o uso do argumento <code>timeout</code> da função <code>$.ajax()</code></h2>
<p>O evento associado ocorre quando se esgota o tempo máximo arbitrado pelo desenvolvedor para que a requisição se complete.</p>
<p>Exemplo:</p>
<ol>
<code>
<li>...</li>
<li>var iconCarregando = $('&lt;img src="icon.gif" class="icon" /> &lt;span class="destaque">Carregando. Por favor aguarde...&lt;/span>');
<li>...</li>
<li>&nbsp;&nbsp;&nbsp;$.ajax({</li>
<li>...</li>
<li>timeout: 4000,</li>
<li>...</li>
</code>
</ol>