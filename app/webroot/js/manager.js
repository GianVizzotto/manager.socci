$(document).ready(function() {
	   $( "input.datepicker" ).dp({
	      dateFormat: 'dd/mm/yy', 
	      altFormat: 'yy-mm-dd'
	   });
	   
	   jQuery(function($){
			$(".telefone").mask("(99)9999-9999");
			$(".cpf").mask("999.999.999-99");
			$(".data").mask("99/99/9999");
		});
	   
	   estado_id = $("#FuncionarioEstadoId").attr('value');
	   	   
});

function mostraCidades(estado_id){
	
		$.ajax({
			url:'/usuarios/cidades/'+estado_id,
			type:'GET',
			dataType:'html',
			success: function(result){
				$(".cidades").html(result);
			}	
		});
	
}