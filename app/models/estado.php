<?php

class Estado extends AppModel {
	
	var $name = 'Estado' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
	function getEstados(){
		
		$estados = $this->find('list' , array(
			'fields' => array(
				'id',
				'uf'
				)
			)
		) ;
		
		return $estados ;
		
	}	
	
}