function iniciaAjax() {
	var objetoAjax = false;
		if (window.XMLHttpRequest) {
			objetoAjax = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		try {		
		objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
			objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch(ex) {	
		objetoAjax = false;
       }
		}
	}
	return objetoAjax;
}

// Captura o link clicado
function linkClicado() {
	var clink = document.getElementById("clink");
		clink.onclick = function() {
		var query = this.getAttribute("href").split("?")[1];
		var arquivo = "destaque.php?"+(query);
		return !requisitar(arquivo);
		};
	}

function requisitar(arquivo) {
			var requisicaoAjax = iniciaAjax(); 
				if(requisicaoAjax) {
					requisicaoAjax.onreadystatechange = function () {	
					trataResposta(requisicaoAjax);	
					};
  requisicaoAjax.open("GET", arquivo, true);
  requisicaoAjax.send(null);
    return true;
  } else {
    return false;
  }
}

/*
	Yellow Fade
	Por Alexandre Junqueira	
	Exemplo: yf.fadeIt('id1,id2,id3')
	*/
	var yf = {	
		
		b : ["00","11","22","33","44","55","66","77","88","99","aa","bb","cc","dd","ee","ff"],	
		count : 0,
		delay : 100,
		timeoutId : 0,
			
		fadeIt : function (ids)
		{
			clearTimeout(yf.timeoutId);
			yf.timeoutId = setTimeout("yf.setBackgroundColor('"+ ids +"')", yf.delay); 
		},	
		
		setBackgroundColor : function (ids)
		{		
			ids = ids.split(",");
			
			for (var i=0; i<ids.length; i++)
				document.getElementById(ids[i]).style.backgroundColor = "#ffff"+ yf.b[yf.count];		
			
			if (yf.count++ < yf.b.length - 1)		
				yf.fadeIt(ids);	
			else
				yf.count = 0;		
		}
	}
	
function trataResposta(requisicaoAjax) {                 
	if(requisicaoAjax.readyState == 4) {
	if(requisicaoAjax.status == 200 || requisicaoAjax.status == 304) {         
	document.getElementById("insere_aqui").innerHTML = requisicaoAjax.responseText;
	yf.fadeIt("insere_aqui"); 

} 
}
}
window.onload = linkClicado;
