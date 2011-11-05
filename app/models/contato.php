<?php

/**
 * 
 * Model referente ao dashbord do sistema.
 * @author caio
 * @since 02-11-2011
 * @email caiocesards@gmail.com
 */

class Contato extends AppModel {
	
	var $name = 'Contato' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
	//	Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	var $validate = array (
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o nome do contato.'
			),
		'email' => array(
			'rule' => 'email',
			'message' => 'Digite o email do contato corretamente.',
			'allowEmpty' => false
			),
		'telefone' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o telfone do contato.'
			)
		);
		
	function addeditContato($dados){
		
		if ($this->validates()){
			if ($this->save($dados)){
				return true;
			}else{
				return false;
			}
		}
		
	}
	
	function deleteContato($dados){
		if ($this->delete($dados)){
			return true;
		}else{
			return false;
		}
	}
	
	
}