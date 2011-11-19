<?php

class Cidade extends AppModel {
	
	var $name = 'Cidade' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
	function getCidades($estado_id , $cidade_id = null){
			
		$cidades =	$this->find('list' , array(
						'fields' => array(
							'id',
							'nome'
							),
						'conditions' => array(
							'estado_id = '.	 $estado_id
							)
						)						
					);
					
		if($cidade_id){
			
			$this->find['conditions'] = array( 'id = '.$cidade_id ) ;
			
		} else {
			
			$cidades = array(''=>'Selecione') + (array)$cidades ;

		}	

		
		return $cidades ;
					
	}
	
}