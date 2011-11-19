$(document).ready(function() {
	   $( "input.datepicker" ).dp({
	      dateFormat: 'dd/mm/yy', 
	      altFormat: 'yy-mm-dd'
	   });
	   
	   jQuery(function($){
			$(".telefone").mask("(99)9999-9999");
			$(".cpf").mask("999.999.999-99");
			$(".cnpj").mask("99.999.999/9999-99");
			$(".data").mask("99/99/9999");
		});
	   
	   //estado_id = $("#FuncionarioEstadoId").attr('value');
	   	   
});

function mostraCidades(estado_id){
	
	$.ajax({
		url:'/usuarios/cidades/'+estado_id,
		type:'GET',
		dataType:'html',
		beforeSend: function(){
			$(".cidades").html('Carregando...');
		},
		success: function(result){
			$(".cidades").html(result);
		}	
	});
	
}

function mostraCidades_2(estado_id, classe, controller, action){
	
	$.ajax({
		url:'/'+controller+'/'+action+'/'+estado_id,
		type:'GET',
		dataType:'html',
		beforeSend: function(){
			$(classe).html('Carregando...');
		},
		success: function(result){
			$(classe).html(result);
		}	
	});
	
}