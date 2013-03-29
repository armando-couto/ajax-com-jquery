<?php
sleep(2);
?>
<h2>Este é o conteúdo requisitado para demonstrar o uso dos argumentos <code>beforeSend</code> e <code>complete</code> da função <code>$.ajax()</code></h2>
<p>O evento associado ocorre no momento imediatamente antes do inicio uma requisiçao AJAX e termina quando a requisição se completa, independentemente de sucesso ou falha.</p>
<p>Exemplo:</p>
<ol>
<code>
<li>...</li>
<li>var iconCarregando = $('&lt;img src="icon.gif" class="icon" /> &lt;span class="destaque">Carregando. Por favor aguarde...&lt;/span>');
<li>...</li>
<li>&nbsp;&nbsp;&nbsp;$.ajax({</li>
<li>...</li>
<li>&nbsp;&nbsp;&nbsp;beforeSend: function(){</li>
<li>&nbsp;&nbsp;&nbsp;$('#insere_aqui').html(iconCarregando);</li>
<li>&nbsp;&nbsp;&nbsp;},</li>
<li>&nbsp;&nbsp;&nbsp;complete: function() {</li>
<li>&nbsp;&nbsp;&nbsp;$(iconCarregando).remove();</li>
<li>&nbsp;&nbsp;&nbsp;},</li>
<li>...</li>
</code>
</ol>