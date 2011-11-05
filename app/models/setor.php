<?php

/**
 * 
 * Model referente ao dashbord do sistema.
 * @author caio
 * @since 02-11-2011
 * @email caiocesards@gmail.com
 */

class Setor extends AppModel {
	
	var $name = 'Setor' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	var $useTable = 'setores';
	
	//	Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	var $validate = array (
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o nome do setor da empresa.'
			),
		'descricao' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite a descrição da empresa.'
			)	
		);
		
	function addeditSetor($dados){
		
		if ($this->validates()){
			if ($this->save($dados)){
				return true;
			}else{
				return false;
			}
		}
		
	}
	
	function deleteSetor($dados){
		if ($this->delete($dados)){
			return true;
		}else{
			return false;
		}
	}
	
	function getSetores(){
		
		$setores =	$this->find('list' , array(
						'fields' => array(
							'id',
							'nome'
								)
							)
						);

		return $setores ;
					
	}
	
	
}