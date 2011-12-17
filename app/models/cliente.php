<?php

/**
 * 
 * Model referente ao dashbord do sistema.
 * @author caio
 * @since 18-11-2011
 * @email caiocesards@gmail.com
 */

class Cliente extends AppModel {
	
	var $name = 'Cliente' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
	//	Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	var $validate = array (
		'razao_social' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite a razão social.'
			),
		'nome_fantasia' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o nome fantasia.'
			),
		'telefone_1' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite o número do telefone.'
			)
		);
		
	function addeditCliente($dados){
		if ($this->save($dados)){
			return true;
		}else{
			return false;
		}
		
	}
	
	function deleteCliente($dados){
		if ($this->delete($dados)){
			return true;
		}else{
			return false;
		}
	}
	
	// function getClientes(){
// 		
		// $clientes =	$this->find('list' , array(
						// 'fields' => array(
							// 'id',
							// 'nome'
								// )
							// )
						// );
// 
		// return $clientes ;
// 					
	// }
	
}