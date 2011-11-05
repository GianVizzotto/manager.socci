<?php

/**
 * 
 * Model para tratamento dos dados da tabela funcionarios pertencente ao schema entidades
 * @author gian
 * @since 27-10-2011
 * @email gfvizzotto@gmail.com
 */

class Funcionario extends AppModel {
	
	var $name = 'Funcionario' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
//	Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	var $validate = array (
		'email_corp' => array(
			'rule' => 'email',
			'message' => 'Digite seu email.'
			),
		'senha' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite sua senha.'
			)	
		);
	
	/**
	 * 
	 * Função responsável por verificar a veracidade dos dados informados no login
	 * @param array $info
	 */
	
	function checkUsuario($info){
		
		$login = $this->find('first' , array(
					'fields'=>array(
						'id',
						'senha',
						'perfil_id'						
							),
					'conditions'=>array(
						'email_corp'=>$info['Funcionario']['email_corp'],
						'status_usuario_id' => 1	
							)
						)
					);
					
		if($login){
			
			if($info['Funcionario']['senha'] == $login['Funcionario']['senha']){
				
				return $login ;
				
			} else {				
				return false ;				
			}
			
		}else {			
			return false ;			
		}			
			
	}
		
}