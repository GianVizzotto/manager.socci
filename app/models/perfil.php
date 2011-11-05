<?php

class Perfil extends AppModel {
	
	var $name = 'Perfil' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	var $useTable = 'perfis' ;

	function getPerfis(){
		
		$perfis = $this->find('list' , array(
					'fields' => array(
						'id',
						'nome'
							)
						)
					);

		return $perfis ;
					
	}
	
}