function mudarTipo() {
	tipoArqu = document.getElementById("tipoArquivo");
	if (tipoArqu.value == "none") {
	document.getElementById("idTipoArquivo").innerHTML="Colocar um Audio";
	document.getElementById("idTipoArquivo").style.display = "none";
	}
	if (tipoArqu.value == "imagem") {
	document.getElementById("idTipoArquivo").innerHTML="Colocar uma imagem";
	document.getElementById("idTipoArquivo").style.display = "inline-block";
	}
	if (tipoArqu.value == "audio") {
	document.getElementById("idTipoArquivo").innerHTML="Colocar um Audio";
	document.getElementById("idTipoArquivo").style.display = "inline-block";
	}
	
	if (tipoArqu.value == "video") {
	document.getElementById("idTipoArquivo").innerHTML="Colocar um Video";
	document.getElementById("idTipoArquivo").style.display = "inline-block";
	}
};

function submitValid() {
	var nomeAux = document.forms.cadastro.nome.value;
	var sobrenomeAux = document.forms.cadastro.nome.value;
	var senhaAux = document.forms.cadastro.nome.value;
	if (nomeAux == "" || nomeAux == null) {
		alert("sem nome");
	}
	if (sobrenomeAux == "" || sobrenomeAux == null) {
		alert("sem sobrenome");
	}
	if (senhaAux == "" || senhaAux == null) {
		alert("sem senha");
	}
}; 

$(document).ready(function() {
    console.log( "ready!" );

    $("#livroRomance").click(function(){
    	$("#detalhesRomance0").prepend("Titulo: A culpa é das estrelas")
    	$("#detalhesRomance1").prepend("Autor: John Green")
    	$("#detalhesRomance2").prepend("Valor:")
    	$("#detalhesRomance3").prepend("Ano: 2014")
    });
    $("#livroComedia").click(function(){
    	$("#detalhesComedia0").prepend("Titulo: Comédia para lê na escola")
    	$("#detalhesComedia1").prepend("Autor: Verissimo")
    	$("#detalhesComedia2").prepend("Valor:")
    	$("#detalhesComedia3").prepend("Ano: 2001")
    });
    $("#livroFiccao").click(function(){
    	$("#detalhesFiccao0").prepend("Titulo: A guerra dos tronos")
    	$("#detalhesFiccao1").prepend("Autor: George R. R.")
    	$("#detalhesFiccao2").prepend("Valor:")
    	$("#detalhesFiccao3").prepend("Ano: 2011")
    });

    $("#detalhesRomance2").on("mouseover", function() {
    		$(this).append("R$ 25,00");
    		$(this).addClass("corValor");

    		var visualRomance = $(this).data("romance");
    		$(this).data("romance"),++visualRomance;
    });

    $("#detalhesComedia2").on("mouseover", function() {
    		$(this).append("R$ 40,00");
    		$(this).addClass("corValor");

    		var visualComedia = $(this).data("romance");
    		$(this).data("romance"),++visualComedia;
    });

    $("#detalhesFiccao2").on("mouseover", function() {
    		$(this).append("R$ 100,00");
    		$(this).addClass("corValor");

    		var visualFiccao = $(this).data("romance");
    		$(this).data("romance"),++visualFiccao;
    });

    $("#tabela2").addClass("tabela2");
	$("#tabela3").addClass("tabela3");
	$("#tabela4").addClass("tabela4");    

});