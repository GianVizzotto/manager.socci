$(document).ready(function() {
	   $( "input.datepicker" ).dp({
	      dateFormat: 'dd/mm/yy', 
	      altFormat: 'yy-mm-dd'
	   });
	   
	   jQuery(function($){
			$(".telefone").mask("(99)9999-9999");
			$(".cpf").mask("999.999.999-99");
			$(".hasDatepicker").mask("99/99/9999");
		});
	   
	   estado_id = $("#FuncionarioEstadoId").attr('value');
	   cidade_id = $("#FuncionarioCidadeId").attr('value');
	   
	   alert(cidade_id);
	   
//	   if(cidade_id != null){
//		   mostraCidades(estado_id,cidade_id);
//	   }else{
//		   mostraCidades(estado_id, null);
//	   }

});

function mostraCidades(estado_id , cidade_id){
	
	if(estado_id != ''){
		$.ajax({
			url:'/usuarios/cidades/'+estado_id+'/'+cidade_id,
			type:'GET',
			dataType:'html',
			success: function(result){
				$("#labelCidades").show();
				$("#cidades").html(result);
			}	
		});
	}
	
}