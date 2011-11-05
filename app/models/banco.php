<?php

/**
 * 
 * Model referente ao dashbord do sistema.
 * @author caio
 * @since 02-11-2011
 * @email caiocesards@gmail.com
 */

class Banco extends AppModel {
	
	var $name = 'Banco' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
	//	Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	var $validate = array (
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o nome do banco.'
			),
		'numero' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o número do banco.'
			)	
		);
		
	function addeditBanco($dados){
		
		if ($this->validates()){
			if ($this->save($dados)){
				return true;
			}else{
				return false;
			}
		}
		
	}
	
	function deleteBanco($dados){
		if ($this->delete($dados)){
			return true;
		}else{
			return false;
		}
	}
	
	
}