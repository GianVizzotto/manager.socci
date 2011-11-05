<?php

/**
 * 
 * Model referente ao dashbord do sistema.
 * @author caio
 * @since 03-11-2011
 * @email caiocesards@gmail.com
 */

 
class Cargo extends AppModel {
	
	var $name = 'Cargo' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
	//	Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	var $validate = array (
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o nome do cargo.'
			),
		'descricao' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite a descrição do cargo.'
			)	
		);
		
	function addeditCargo($dados){
		
		if ($this->validates()){
			if ($this->save($dados)){
				return true;
			}else{
				return false;
			}
		}
		
	}
	
	function deleteCargo($dados){
		if ($this->delete($dados)){
			return true;
		}else{
			return false;
		}
	}
	
	
}