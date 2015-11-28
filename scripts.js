$(document).ready(function(){
	

	/*$(".pessoas").click(function(){
				$.ajax({
           		type: 'POST',
            	url: 'consulta-dados-DQ.php',
           		data: "id="+$(this).data('valor'),
           		dataType: 'json',
           		cache: false,
          		 success: function(tarray) {
          		 	loadDivAjax(tarray);
               
          		  },
       		 });
			}
		
		);	*/	
	
});
/*
function loadDivAjax(tarray) {
	//console.log(tarray);	
	
	//var targetDiv = document.getElementById("familia").getElementsByClassName("classificacao-"+tarray[0].pergunta1+"-desativado").addClass('classificacao-'+tarray[0].pergunta1);
		var id = tarray[0].pergunta1;
				var  cls = 'p1';
		console.log($(cls).find('.classificacao-'+id+'-desativado').html());
		console.log($(cls).filter('.classificacao-'+id+'-desativado').html());
		$(cls).filter('.classificacao-'+id+'-desativado').removeClass().addClass('classificacao-'+tarray[0].pergunta1);
		$( "tr.p1" ).find( 'classificacao-'+id+'-desativado' ).css( "background-color", "red" );




	
}*/

